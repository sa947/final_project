<html>
   <head>
         //add the stylesheet for the application
	       <link rel="stylesheet" type="text/css" href="style.css">
	          </head>
		     <body>
		           <header>
			            <?php include 'header.php'; ?>
				          </header>
					        <main>
						         <h2>Todo List</h2>
							          <table>
								              <ul>
									                     //
											     display
											     all
											     the
											     tasks
											     in
											     the
											     table
											     todo_list 
											                    <?php
													    foreach($tasks
													    as
													    $task)
													    :
													    ?>
													                   <tr>
															                     <td>
																	                          <li><a
																				  href="?listID=<?php
																				  echo
																				  $task->getID();
																				  ?>">
																				                          <?php
																							  echo
																							  $task->getTitle();
																							  ?>
																							                          </a>
																										                       </li>
																												                         </td>
																															                   //display
																																	   delete
																																	   button
																																	   to
																																	   delete
																																	   task
																																	                     <td>
																																			                          <form
																																						  action="."
																																						  method="post"
																																						  >
																																						                          <input
																																									  type="hidden"
																																									  name="action"
																																									                             value="delete_task">
																																												                             <input
																																															     type="hidden"
																																															     name="listID"
																																															                                value="<?php
																																																			echo
																																																			$task->getID();
																																																			?>">
																																																			                        <input
																																																						type="submit"
																																																						value="Delete">
																																																						                     </form>
																																																								                       </td>
																																																										                         //display
																																																													 edit
																																																													 button
																																																													 to
																																																													 edit
																																																													 task
																																																													                   <td>
																																																															                        <form
																																																																		action="."
																																																																		method="post"
																																																																		>
																																																																		                        <input
																																																																					type="hidden"
																																																																					name="action"
																																																																					                           value="show_edit_form">
																																																																								                           <input
																																																																											   type="hidden"
																																																																											   name="listID"
																																																																											                              value="<?php
																																																																														      echo
																																																																														      $task->getID();
																																																																														      ?>">
																																																																														                              <input
																																																																																	      type="submit"
																																																																																	      value="Edit">
																																																																																	                           </form>
																																																																																				                     </td>
																																																																																						                    </tr>
																																																																																								                   <?php
																																																																																										   endforeach;
																																																																																										   ?>
																																																																																										               </ul>
																																																																																											                </table>
																																																																																													         //Display
																																																																																														 link
																																																																																														 to
																																																																																														 add
																																																																																														 a
																																																																																														 new
																																																																																														 task
																																																																																														 to
																																																																																														 the
																																																																																														 table
																																																																																														 todo_list
																																																																																														          <p><a
																																																																																															  href="index.php?action=show_add_form">Create
																																																																																															  New
																																																																																															  Todo
																																																																																															  List</a></p>
																																																																																															           <?php
																																																																																																   if
																																																																																																   ($items
																																																																																																   !=
																																																																																																   NULL)
																																																																																																   {
																																																																																																   ?>   
																																																																																																            <h2><?php
																																																																																																	    echo
																																																																																																	    'Todo
																																																																																																	    List
																																																																																																	    :'.$current_task->getTitle();
																																																																																																	    ?></h2>
																																																																																																	    //display
																																																																																																	    selected
																																																																																																	    task
																																																																																																	             <
																																																																																																		              
																																																																																																			               /main>
																																																																																																				             <?php
																																																																																																					     include
																																																																																																					     'footer.php';
																																																																																																					     ?>
																																																																																																					        </body>
																																																																																																						</html>
