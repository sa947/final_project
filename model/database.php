<?php
// database class containing attributes and values used to connect to database
   class Database {
          private static $dsn = 'mysql:host=sql2.njit.edu;dbname=sa947';
	         private static $username = 'sa947';
		        private static $password = 'YTdrvH89E';
			       private static $db;
			          
				         private function __construct() {}
					    
					           public static function getDB
						   () {
						              if
							      (!isset(self::$db))
							      {
							                     try
									     {
									                        self::$db
												=
												new
												PDO(self::$dsn,
												                                        self::$username,
																	                                        self::$password);
																						               }
																							       catch
																							       (PDOException
																							       $e)
																							       {
																							                          $error_message
																										  =
																										  $e->getMessage();
																										                     include('database_error.php');
																												                        exit();
																															               }
																																                  }
																																		             return
																																			     self::$db;
																																			            }
																																				       }
																																				          ?>
