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
																								     
																								         
																									    else
																									    if
																									    ($action
																									    ==
																									    'show_add_form')
																									    {
																									       //
																									       Set
																									       all
																									       parameters
																									       required
																									       for
																									       displaying
																									       the
																									       Add
																									       task
																									       form.
																									              
																										             $tasks
																											     =
																											     $todo_list_DB->getTasks();
																											            
																												           include('view/task_add.php');
																													      }
																													             
																														        else
																															if
																															($action
																															==
																															'add_task')
																															{
																															       
																															         //
																																 Set
																																 all
																																 parameters
																																 required
																																 for
																																 displaying
																																 the
																																 Home
																																 page
																																 after
																																 adding
																																 new
																																 task.
																																        $title
																																	=
																																	filter_input(INPUT_POST,
																																	'title');
																																	       
																																	              if
																																		      ($title
																																		      ==
																																		      NULL
																																		      ||
																																		      $title
																																		      ==
																																		      FALSE
																																		      )
																																		      {
																																		                 $error
																																				 =
																																				 "Enter
																																				 valid
																																				 task
																																				 title
																																				 and
																																				 try
																																				 again.";
																																				            include('error/error.php');
																																					           }
																																						   else
																																						   {
																																						              
																																							                 $todo_list_DB::addTask($title);
																																									            $added_task
																																										    =
																																										    $todo_list_DB->getAddedTask($title);
																																										               $listID
																																											       =
																																											       $added_task->getID();
																																											                  
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
																																																					       
																																																					              }
																																																						             
																																																							        else
																																																								if
																																																								($action
																																																								==
																																																								'show_edit_form')
																																																								{
																																																								   
																																																								      //
																																																								      Set
																																																								      all
																																																								      parameters
																																																								      required
																																																								      for
																																																								      displaying
																																																								      the
																																																								      Edit
																																																								      task
																																																								      form. 
																																																								         	$listID
																																																										=
																																																										filter_input(INPUT_POST,
																																																										'listID', 
																																																										               FILTER_VALIDATE_INT);
																																																											              
																																																												             
																																																													               $current_task
																																																														       =
																																																														       $todo_list_DB->getTask($listID);
																																																														                  $tasks
																																																																  =
																																																																  $todo_list_DB->getTasks();
																																																																             $items
																																																																	     =
																																																																	     $todo_item_DB->getItemByTask($listID);
																																																																	            include('view/task_edit.php');
																																																																		       }
																																																																		          
																																																																			     else
																																																																			     if
																																																																			     ($action
																																																																			     ==
																																																																			     'edit_task')
																																																																			     {
																																																																			            
																																																																				        //
																																																																					Set
																																																																					all
																																																																					parameters
																																																																					required
																																																																					for
																																																																					displaying
																																																																					the
																																																																					Home
																																																																					page
																																																																					after
																																																																					editing
																																																																					the
																																																																					task.
																																																																					       $title
																																																																					       =
																																																																					       filter_input(INPUT_POST,
																																																																					       'title');
																																																																					              $listID
																																																																						      =
																																																																						      filter_input(INPUT_POST,
																																																																						      'listID', 
																																																																						                     FILTER_VALIDATE_INT);
																																																																								             $old_title
																																																																									     =
																																																																									     filter_input(INPUT_POST,
																																																																									     'old_title');
																																																																									               
																																																																										            if
																																																																											    ($title
																																																																											    ==
																																																																											    NULL
																																																																											    ||
																																																																											    $title
																																																																											    ==
																																																																											    FALSE
																																																																											    )
																																																																											    {
																																																																											               $title
																																																																												       =
																																																																												       $old_title;
																																																																												                  
																																																																														         } 
																																																																															           
																																																																																              
																																																																																	                 $todo_list_DB::editTask($listID,
																																																																																			 $title);
																																																																																			            
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
