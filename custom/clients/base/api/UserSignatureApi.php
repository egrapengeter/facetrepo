<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UserSignatureApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'UserSignatureEndpoint' => array(
                'reqType'   => 'GET',
                'path'      => array('UserSignature', 'fetch', '?'),
                'pathVars'  => array('', '', 'user_id'),
                'method'    => 'fetchUserSignature',
                'shortHelp' => 'Fetch User Signature',
                'longHelp'  => ''
            ),
            'UserSignatureDisregard' => array(
                'reqType'   => 'POST',
                'path'      => array('UserSignature', 'post'),
                'pathVars'  => array('', ''),
                'method'    => 'postSignature',
                'shortHelp' => 'Submit signature details',
                'longHelp'  => ''
            ),
        );
    }

    public function fetchUserSignature($api, $args)
    {
        $this->requireArgs($args, array('user_id'));

        global $db;
        $data = array();

	$user = BeanFactory::getBean('Users', $args['user_id']);
	$data['user'] = $this->formatBean($api, $args, $user);
	if (!empty($user->signature_c)) {
            $data['signature'] = $user->signature_c;
        }

        return $data;
    }

    public function postSignature($api, $args)
    {
        $this->requireArgs($args, array('user_id', 'signature'));

        if (empty($args['user_id'])) {
            throw new SugarApiExceptionInvalidParameter('Required user_id is empty.');
        }
        if (empty($args['signature'])) {
            throw new SugarApiExceptionInvalidParameter('Required signature is empty.');
        }

        $user = BeanFactory::getBean('Users', $args['user_id']);
        $user->signature_c = $args['signature'];
        $user->save();

        return array('success' => true);
    }

}
