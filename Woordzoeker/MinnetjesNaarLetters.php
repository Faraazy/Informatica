 //Replace placeholders with letters from the words depending on the level

               foreach ($word_list as $word)

               {

                              $pos = getRandomStartPosition($word, $puzzle_level);

                              $skip_entry = false;

                              $retry = 0;

                              $has_overlap = false;

                              do

                              {

                                            $has_overlap = hasOverlap($data, $word, $pos);

                                            if ($has_overlap)

                                            {

                                                           $pos = getRandomStartPosition($word, $puzzle_level);

                                                           if ($retry == (puzzle_height * puzzle_width))

                                                           {

                                                                          $has_overlap = false;

                                                                          $skip_entry = true;

                                                           }

                                                           $retry++;

                                            }

                              }

                              while ($has_overlap);
                              
