



                <div class="form-group">
                  <label for="{{ $name }}" class="col-sm-2 control-label"> {{ $text }} </label>

                  <div class="col-sm-10">




                    @if( $type == 'number' )

                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp


                        {!! Form::number($name, null, $output ) !!}

                    @elseif( $type == 'text' )

                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp


                        {!! Form::text($name, null, $output) !!}

                    @elseif( $type == 'tel' )
                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp


                        {!! Form::tel($name, null, $output) !!}



                    @elseif( $type == 'email' )

                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp


                        {!! Form::email($name, null, $output) !!}

                    @elseif( $type == 'date' )

                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp


                        {!! Form::date($name, null, $output) !!}


                    @elseif( $type == 'textarea' )


                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp

                        {!! Form::textarea($name, null, $output) !!}

                    @elseif( $type == 'checkbox' )

                        @php
                            $primary = ['class' => $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp

                        {!! Form::checkbox( $name , null , $checked, $output) !!}

                    @elseif($type == 'select')

                        @php
                            $primary = ['class' => 'form-control '. $class, 'required' => $required ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp

                        {!! Form::select($name, $array, $selected , $output ) !!}

                    @elseif( $type == 'file' )

                        @php
                            $primary = ['class' => 'form-control '. $class ];



                            $output = array_merge($primary,$additionalInfo);

                        @endphp

                    	{!! Form::file($name, null , $output) !!}

                        <div class="text-center">

                                <img src="{{ \App\Helpers\Config\Setting::ifImg( $name ) }}" class="img-responsive" width="30%"/>


                        </div>

                        

                    @endif


                  </div>
                </div>
                        

                    @if ($errors->has($name))
                        <span class="help-block">
                            <strong>{{ $errors->first( $name ) }}</strong>
                        </span>
                    @endif


                    @if( $type == 'file' )

                        

                    @endif


