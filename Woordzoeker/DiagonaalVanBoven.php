  {

                                            $max_right = (puzzle_width - strlen($word)) - 1;

                                            $max_bottom = (puzzle_height - strlen($word)) - 1;

                                            break;

                              }

               }
                  {

                                            $i = $position->column;

                                            $j = $position->column + strlen($word);

                                            $row_count = 0;

                                            if ($j >= puzzle_width)

                                            {

                                                           $overlap_count++;

                                            }

                                            else

                                            {

                                                           while ($i < $j)

                                                           {

                                                                          if ($data[$position->row + $row_count][$i] != '0')

                                                                          {

                                                                                         $overlap_count++;

                                                                          }

                                                                          $row_count++;

                                                                          $i++;

                                                           }

                                            }

                                            break;

                              }