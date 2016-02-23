 {

                                            $max_right = (puzzle_width - strlen($word));

                                            $max_bottom = puzzle_height - 1;

                                            break;

                              }
                               {

                                            $i = $position->column;

                                            $j = $position->column + strlen($word);

                                            if ($j >= puzzle_width)

                                            {

                                                           $overlap_count++;

                                            }

                                            else

                                            {

                                                           while ($i < $j)

                                                           {

                                                                          if ($data[$position->row][$i] != '0')

                                                                          {

                                                                                         $overlap_count++;

                                                                          }

                                                                          $i++;

                                                           }

                                            }

                                            break;

                              }