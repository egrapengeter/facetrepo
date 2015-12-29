select a.id, evaluation_rating_c, territorymatch, opportunities_cstm.expected_job_start_c as opp_start, opportunities_cstm.expected_completion_date_c opp_end from ( 
                select 
                  con_contractors.id, 
                  con_contractors_cstm.evaluation_rating_c , 
                  3 as territorymatch
                from con_contractors 
                left join fdter_territories_con_contractors_1_c 
                  left join fdter_territories on
                  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1fdter_territories_ida = fdter_territories.id
                on con_contractors.id =  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1con_contractors_idb
                left join con_contractors_cstm on con_contractors.id = con_contractors_cstm.id_c
               
                -- contractor territory match all three
                where fdter_territories.state = 'CO'
                and fdter_territories.city = 'Littleton'
                and fdter_territories.subdivision = 'Ken Caryl'
                -- 
                 union all                  
                select 
                    con_contractors.id, 
                    con_contractors_cstm.evaluation_rating_c , 
                    2 as territorymatch
                from con_contractors left join fdter_territories_con_contractors_1_c 
                  left join fdter_territories on
                  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1fdter_territories_ida = fdter_territories.id
                on con_contractors.id =  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1con_contractors_idb
                left join con_contractors_cstm on con_contractors.id = con_contractors_cstm.id_c
                where fdter_territories.state = 'CO'
                and fdter_territories.city = 'Littleton'
             union all  
                select 
                    con_contractors.id, 
                    con_contractors_cstm.evaluation_rating_c , 
                    1 as territorymatch
                from con_contractors left join fdter_territories_con_contractors_1_c 
                  left join fdter_territories on
                  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1fdter_territories_ida = fdter_territories.id
                on con_contractors.id =  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1con_contractors_idb
                left join con_contractors_cstm on con_contractors.id = con_contractors_cstm.id_c
                where fdter_territories.state = 'CO'
             ) a 
        -- subquery A above contains the list of contractor IDs, the strength of their territory match, and rating.
            left join con_contractors_fdest_estimates_1_c 
              left join opportunities_fdest_estimates_1_c
                left join opportunities
                  left join opportunities_cstm
                  on opportunities.id = opportunities_cstm.id_c
                on opportunities_fdest_estimates_1_c.opportunities_fdest_estimates_1opportunities_ida = opportunities.id
              on con_contractors_fdest_estimates_1_c.con_contractors_fdest_estimates_1fdest_estimates_idb = opportunities_fdest_estimates_1_c.opportunities_fdest_estimates_1fdest_estimates_idb
            on a.id = con_contractors_fdest_estimates_1_c.con_contractors_fdest_estimates_1con_contractors_ida
        
        where 
          -- don't include the current opp id in consideration for determining availability
          opportunities.id != 'CE59F43C-23D7-7740-B034-FF95526BC500'
