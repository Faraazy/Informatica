 {

                                            $max_right = puzzle_width - 1;

                                            $max_bottom = (puzzle_height - strlen($word));

                                            break;

                              } 
                              {

                                            $i = $position->row;

                                            $j = $position->row + strlen($word);

                                            if ($j >= puzzle_height)

                                            {

                                                           $overlap_count++;

                                            }

                                            else

                                            {

                                                           while ($i < $j)

                                                           {

                                                                          if ($data[$i][$position->column] != '0')

                                                                          {

                                                                                         $overlap_count++;

                                                                          }

                                                                          $i++;

                                                           }            

                                            }

                                            break;

                              }
