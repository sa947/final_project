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
																																													        
																																														       
																																														              public
																																															      function
																																															      addItem($item_title,
																																															      $status,
																																															      $listID)
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
																																																	 todo_item 
																																																	             $db
																																																		     =
																																																		     Database::getDB();
																																																		                $query
																																																				=
																																																				               "INSERT
																																																					       INTO
																																																					       todo_item
																																																					                           (item_title
																																																								   ,
																																																								   status
																																																								   ,
																																																								   listID
																																																								   )
																																																								                   VALUES
																																																										                       ('$item_title'
																																																												       ,
																																																												       '$status'
																																																												       ,
																																																												       '$listID')";
																																																												                  $row_count
																																																														  =
																																																														  $db->exec($query);
																																																														             return
																																																															     $row_count;
																																																															            }
																																																																           
																																																																	          public
																																																																		  function
																																																																		  editItem($itemID,
																																																																		  $item_title,
																																																																		  $status)
																																																																		  {
																																																																		     	//
																																																																			function
																																																																			to
																																																																			edit
																																																																			a
																																																																			row
																																																																			in
																																																																			the
																																																																			table
																																																																			todo_item
																																																																			based
																																																																			on
																																																																			the
																																																																			itemID
																																																																			field
																																																																			   		 $db
																																																																					 =
																																																																					 Database::getDB();
																																																																					            $query
																																																																						    =
																																																																						                   "UPDATE
																																																																								   todo_item
																																																																								                   SET
																																																																										   item_title
																																																																										   =
																																																																										   '$item_title'
																																																																										   ,
																																																																										   status
																																																																										   =
																																																																										   '$status'
																																																																										   WHERE
																																																																										   itemID
																																																																										   =
																																																																										   '$itemID'";
																																																																										                      
																																																																												                 $row_count
																																																																														 =
																																																																														 $db->exec($query);
																																																																														            return
																																																																															    $row_count;
																																																																															       	
																																																																																       }
																																																																																          
																																																																																	        
																																																																																		   }
																																																																																		      ?>
