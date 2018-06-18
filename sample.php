<?php
class MergeSort
{
        public $array;

            function __construct($ary)
                    {
                                $this->array = $ary;
                                    }
                function run()
                        {
                                    $this->mergeSort(0, count($this->array));
                                        }

                    function mergeSort($low, $high)
                            {
                                        if ($high - $low <= 1) return;
                                                $middle = (int)($low + ($high - $low) / 2);
                                                        $this->mergeSort($low, $middle);
                                                                $this->mergeSort($middle, $high);
                                                                        $this->merge($low, $middle, $high);
                                                                                echo "<pre>";
                                                                                        print_r($this->array);
                                                                                                echo "</pre>";
                                                                                                    }

                        function merge($low, $middle, $high)
                                {
                                            $helper = array();
                                                    $helperLeft = $low;
                                                            $helperRight = $middle;

                                                                    while ($helperLeft < $middle && $helperRight < $high) {
                                                                                    if ($this->array[$helperLeft] <= $this->array[$helperRight]) {
                                                                                                        $result[] = $this->array[$helperLeft];
                                                                                                                        $helperLeft++;
                                                                                                                                    } else {
                                                                                                                                                        $result[] = $this->array[$helperRight];
                                                                                                                                                                        $helperRight++;
                                                                                                                                                                                    }
                                                                                            }
                                                                            while ($helperLeft < $middle) {
                                                                                            $result[] = $this->array[$helperLeft];
                                                                                                        $helperLeft++;
                                                                                                                }
                                                                                    while ($helperRight < $high) {
                                                                                                    $result[] = $this->array[$helperRight];
                                                                                                                $helperRight++;
                                                                                                                        }
                                                                                            $this->arrayCopy($result, $low, $high);
                                                                                                }

                            function arrayCopy($resource, $start, $end)
                                    {
                                                $resIndex = 0;
                                                        for ($i = $start; $i < $end; $i++) {
                                                                        $this->array[$i] = $resource[$resIndex];
                                                                                    $resIndex++;
                                                                                            }
                                                            }
}

$ary = range(1, 11, 1);
shuffle($ary);

$mergeSort = new MergeSort($ary);
$mergeSort->run();
