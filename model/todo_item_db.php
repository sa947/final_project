<?php
   class todo_item_DB {
      // function to fetch all rows from the table todo_item based on the listID field
             public function getItemByTask($listID) {
	                     $db = Database::getDB();
			                     $query = "SELECT * FROM todo_item
					                          WHERE listID = '$listID'
								                       ORDER
										       BY
										       itemID";
										                       $result
												       =
												       $db->query($query);
												                       
														                       $items
																       =
																       array();
																                       
																		                      foreach
																				      ($result
																				      as
																				      $row)
																				      {
																				                      $todo_item
																						      =
																						      new
																						      todo_item();
																						                      
																								                      $todo_item->setItemID($row['itemID']);
																										                      $todo_item->setListID($row['listID']);
																												                      $todo_item->setItemTitle($row['item_title']);
																														                      $todo_item->setStatus($row['status']);
																																                     
																																		        
																																			                $items[]
																																					=
																																					$todo_item;
																																					                 }
																																							               
																																								                     return
																																										     $items;
																																										                    
																																												          }
																																													            
																																														       }
																																														          ?>
