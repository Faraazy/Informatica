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

                                                                          if ($data[($position->row + strlen($word)) - $row_count][$i] != '0')

                                                                          {

                                                                                         $overlap_count++;

                                                                          }

                                                                          $row_count++;

                                                                          $i++;

                                                           }

                                            }

                                            break;

                              }