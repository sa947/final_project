<?php
   require('model/database.php');
      require('model/todo_list.php');
         require('model/todo_list_db.php');
	    require('model/todo_item.php');
	       require('model/todo_item_db.php');
	          
		     
		        
			   $todo_list_DB = new todo_list_DB();
			      $todo_item_DB = new todo_item_DB();
			         
				    // To set a default action . This Home page gets
				    displayed up on starting the application
				       $action = filter_input(INPUT_POST, 'action');
				          if ($action == NULL) {
					         $action = filter_input(INPUT_GET,
						 'action');
						        if ($action == NULL) {
							           $action = 'list_tasks';
								          }
									     }  
									        
										   if
										   ($action
										   ==
										   'list_tasks')
										   {
										      //
										      Set
										      all
										      parameters
										      required
										      for
										      the
										      displaying
										      Home
										      page
										      view
										             $listID
											     =
											     filter_input(INPUT_GET,
											     'listID', 
											                    FILTER_VALIDATE_INT);
													           if
														   ($listID
														   ==
														   NULL
														   ||
														   $listID
														   ==
														   FALSE)
														   {
														              
															                 $first_task
																	 =
																	 $todo_list_DB->getFirstTask();
																	            $listID
																		    =
																		    $first_task->getID();
																		           } 
																			      
																			         	$current_task
																					=
																					$todo_list_DB->getTask($listID);
																					       $tasks
																					       =
																					       $todo_list_DB->getTasks();
																					              $items
																						      =
																						      $todo_item_DB->getItemByTask($listID);  
																						         
																							        include('view/task_view.php');
																								   } 
																								      
																								        
																									   
																									      ?>
