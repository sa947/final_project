<?php
//methods to be performed on fields of the table todo_list
   class todo_list_DB {
      // function to fetch the first row in the table todo_list as todo_list object
             public function getFirstTask() {
	                $db = Database::getDB();
			           $query = 'SELECT * FROM todo_list LIMIT 1';
				              $statement = $db->query($query);
					                 $row = $statement->fetch();
							            $todo_list = new
								    todo_list();
								               $todo_list->setID($row['listID']);
									                  $todo_list->setTitle($row['title']);
											             return
												     $todo_list;
												            }
													       
													              public
														      function
														      getTasks()
														      {
														             //
															     function
															     to
															     fetch
															     all
															     rows
															     from
															     the
															     table
															     todo_list
															     as
															     todo_list
															     objects
															                $db
																	=
																	Database::getDB();
																	           $query
																		   =
																		   'SELECT
																		   *
																		   FROM
																		   todo_list
																		                        ORDER
																					BY
																					listID';
																					           $result
																						   =
																						   $db->query($query);
																						              $tasks
																							      =
																							      array();
																							                 foreach
																									 ($result
																									 as
																									 $row)
																									 {
																									                $todo_list
																											=
																											new
																											todo_list();
																											               $todo_list->setID($row['listID']);
																												                      $todo_list->setTitle($row['title']);
																														                     $tasks[]
																																     =
																																     $todo_list;
																																                }
																																		           return
																																			   $tasks;
																																			          }
																																				         public
																																					 function
																																					 getTask($listID)
																																					 {
																																					        //
																																						function
																																						to
																																						fetch
																																						a
																																						row
																																						from
																																						the
																																						table
																																						todo_list
																																						based
																																						on
																																						the
																																						listID
																																						field
																																						           $db
																																							   =
																																							   Database::getDB();
																																							              $query
																																								      =
																																								      "SELECT
																																								      *
																																								      FROM
																																								      todo_list
																																								                           WHERE
																																											   listID
																																											   =
																																											   '$listID'";
																																											              $statement
																																												      =
																																												      $db->query($query);
																																												                 $row
																																														 =
																																														 $statement->fetch();
																																														            $todo_list
																																															    =
																																															    new
																																															    todo_list();
																																															               $todo_list->setID($row['listID']);
																																																                  $todo_list->setTitle($row['title']);
																																																		             return
																																																			     $todo_list;
																																																			            }
																																																				            public
																																																					    function
																																																					    addTask($title)
																																																					    {
																																																					               //
																																																						       function
																																																						       to
																																																						       add
																																																						       a
																																																						       row
																																																						       to
																																																						       the
																																																						       table
																																																						       todo_list
																																																						                   $db
																																																								   =
																																																								   Database::getDB();
																																																								              $query
																																																									      =
																																																									                     "INSERT
																																																											     INTO
																																																											     todo_list
																																																											                         (title)
																																																														                 VALUES
																																																																                     ('$title')";
																																																																		                $row_count
																																																																				=
																																																																				$db->exec($query);
																																																																				           return
																																																																					   $row_count;
																																																																					          }
																																																																						         
																																																																							         public
																																																																								 function
																																																																								 getAddedTask($title)
																																																																								 {
																																																																								            //
																																																																									    function
																																																																									    to
																																																																									    fetch
																																																																									    a
																																																																									    row
																																																																									    from
																																																																									    the
																																																																									    table
																																																																									    todo_list
																																																																									    based
																																																																									    on
																																																																									    the
																																																																									    title
																																																																									    field
																																																																									                $db
																																																																											=
																																																																											Database::getDB();
																																																																											           $query
																																																																												   =
																																																																												   "SELECT
																																																																												   *
																																																																												   FROM
																																																																												   todo_list
																																																																												   WHERE
																																																																												   title
																																																																												   =
																																																																												   '$title'";
																																																																												              $statement
																																																																													      =
																																																																													      $db->query($query);
																																																																													                 $row
																																																																															 =
																																																																															 $statement->fetch();
																																																																															            $todo_list
																																																																																    =
																																																																																    new
																																																																																    todo_list();
																																																																																               $todo_list->setID($row['listID']);
																																																																																	                  $todo_list->setTitle($row['title']);
																																																																																			             return
																																																																																				     $todo_list;
																																																																																				            }
																																																																																					           
																																																																																						          
																																																																																							     }
																																																																																							        ?>
