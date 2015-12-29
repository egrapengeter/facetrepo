<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class EvaluationHooks
{
	public function after_save($bean, $event, $args) {
		$this->evaluation_rollup($bean);
	}

	public function after_delete($bean, $event, $args) {
		$this->evaluation_rollup($bean);
	}

	public function after_relationship_delete($bean, $event, $args) {
		$this->evaluation_rollup($bean);
	}

	private function evaluation_rollup($bean) {
		global $db;

		$sql = "SELECT e.id, ec.evaluation_total_c AS score
				FROM eva_evaluations e
				INNER JOIN eva_evaluations_cstm ec ON ec.id_c = e.id
				INNER JOIN con_contractors_eva_evaluations_1_c ce
					ON ce.con_contractors_eva_evaluations_1eva_evaluations_idb = e.id AND ce.deleted = 0
				WHERE ce.con_contractors_eva_evaluations_1con_contractors_ida = '$bean->con_contractors_eva_evaluations_1con_contractors_ida'
				AND e.deleted = 0";

		$res = $db->query($sql);

		$eval_count = $db->getRowCount($res);
		$contractor_score = 0;

		if ($eval_count > 0) {
			while ($eval = $db->fetchByAssoc($res)) {
				$contractor_score += $eval['score'];
			}
		}

		$contractor_score = ( (float) $contractor_score / (float) $eval_count );
		$contractor_rating = '';

		if ($contractor_score >= 90) {
			$contractor_rating = 'A';
		}
		else if ($contractor_score >= 80) {
			$contractor_rating = 'B';
		}
		else {
			$contractor_rating = 'C';
		}

		$contractor = BeanFactory::getBean('con_Contractors', $bean->con_contractors_eva_evaluations_1con_contractors_ida);

		$contractor->evaluation_score_c = $contractor_score;
		$contractor->evaluation_rating_c = $contractor_rating;

		$contractor->save();
	}
}