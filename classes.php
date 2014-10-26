<?php class Person
                {
                    public function __construct()
                    {
                        global $class;
                        global $methods;

                        $instance = call_user_func($class);
                        $vars = get_object_vars($instance);

                        if (isset($vars["prototype"])) {
                            $prototype = $vars["prototype"];
                            unset($vars["prototype"]);
                            $vars["prototype"] = $prototype;
                        }

                        foreach ($vars as $property => $value) {
                            if ($property != "prototype") {
                                if (is_callable($value)) {
                                    $methods[$property] = $value;
                                } else {
                                    $this->{$property} = $value;
                                }
                            } else {
                                foreach (get_object_vars($value) as $property2 => $value2) {
                                    if (is_callable($value2)) {
                                        if (!isset($methods[$property2])) {
                                            $methods[$property2] = $value2;
                                        }
                                    } else {
                                        if (!isset($this->{$property2})) {
                                            $this->{$property2} = $value2;
                                        }
                                    }
                                }
                            }
                        }
                    }

                    public function __call($method, $args)
                    {
                        global $methods;
                        global $self;

                        $self = $this;

                        return call_user_func_array($methods[$method], $args);
                    }
                }