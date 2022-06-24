<div class="tab-pane {{  ( Session::get('active_tab') == 'styleTab') ? 'active' : '' }}" id="tab-5">
    <div class="p-a-md"><h5><i class="material-icons">&#xe41d;</i>
            &nbsp; {!!  __('backend.styleSettings') !!}</h5></div>
    <div class="p-a-md col-md-12">

        <div class="form-group row">
            @foreach(Helper::languagesList() as $ActiveLanguage)
                <div class="col-sm-6 m-b-2">
                    <label>{!!  __('backend.siteLogo') !!}</label> {!! @Helper::languageName($ActiveLanguage) !!}
                    @if($Setting->{'style_logo_'.@$ActiveLanguage->code}!="")
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-12 box p-a-xs text-center">
                                    <a target="_blank"
                                       href="{{ asset('uploads/settings/'.$Setting->{'style_logo_'.@$ActiveLanguage->code}) }}"><img
                                            src="{{ asset('uploads/settings/'.$Setting->{'style_logo_'.@$ActiveLanguage->code}) }}"
                                            class="img-responsive" id="style_logo_{{ @$ActiveLanguage->code }}_prv"
                                            style="width: auto;max-width: 260px;max-height: 60px">
                                        <br>
                                        <small>{{ $Setting->{'style_logo_'.@$ActiveLanguage->code} }}</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-12 box p-a-xs text-center">
                                    <img
                                        src="{{ asset('uploads/settings/nologo.png') }}"
                                        class="img-responsive" id="style_logo_{{ @$ActiveLanguage->code }}_prv"
                                        style="width: auto;max-width: 260px;max-height: 60px">
                                    <br>
                                    <small>nologo.png</small>

                                </div>
                            </div>
                        </div>
                    @endif
                    {!! Form::file('style_logo_'.@$ActiveLanguage->code, array('class' => 'form-control','id'=>'style_logo_'.@$ActiveLanguage->code,'accept'=>'image/*')) !!}
                    <small>
                        <i class="material-icons">&#xe8fd;</i>( 260x60 px ) -
                        {!!  __('backend.imagesTypes') !!}
                    </small>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="style_fav">{!!  __('backend.favicon') !!}</label>
                @if($Setting->style_fav!="")
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12 box p-a-xs text-center">
                                <a target="_blank"
                                   href="{{ asset('uploads/settings/'.$Setting->style_fav) }}"><img
                                        src="{{ asset('uploads/settings/'.$Setting->style_fav) }}"
                                        class="img-responsive" id="style_fav_prv"
                                        style="max-width: 60px;height: 60px">
                                    <br>
                                    <small>{{ $Setting->style_fav }}</small>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12 box p-a-xs text-center">
                                <a target="_blank"
                                   href="{{ asset('uploads/settings/nofav.png') }}"><img
                                        src="{{ asset('uploads/settings/nofav.png') }}"
                                        class="img-responsive" id="style_fav_prv"
                                        style="max-width: 60px;height: 60px">
                                    <br>
                                    <small>nofav.png</small>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                {!! Form::file('style_fav', array('class' => 'form-control','id'=>'style_fav','accept'=>'image/*')) !!}
                <small>
                    <i class="material-icons">&#xe8fd;</i> ( 32x32 px ) -
                    {!!  __('backend.imagesTypes') !!}
                </small>
            </div>
            <div class="col-sm-6">
                <label for="style_apple">{!!  __('backend.appleIcon') !!}</label>
                @if($Setting->style_apple!="")
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12 box p-a-xs text-center">
                                <a target="_blank"
                                   href="{{ asset('uploads/settings/'.$Setting->style_apple) }}"><img
                                        src="{{ asset('uploads/settings/'.$Setting->style_apple) }}"
                                        class="img-responsive" id="style_apple_prv"
                                        style="width: 60px;height: 60px">
                                    <br>
                                    <small>{{ $Setting->style_apple }}</small>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12 box p-a-xs text-center">
                                <a target="_blank"
                                   href="{{ asset('uploads/settings/nofav.png') }}"><img
                                        src="{{ asset('uploads/settings/nofav.png') }}"
                                        class="img-responsive" id="style_apple_prv"
                                        style="max-width: 60px;height: 60px">
                                    <br>
                                    <small>nofav.png</small>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                {!! Form::file('style_apple', array('class' => 'form-control','id'=>'style_apple','accept'=>'image/*')) !!}
                <small>
                    <i class="material-icons">&#xe8fd;</i> ( 180x180 px ) -
                    {!!  __('backend.imagesTypes') !!}
                </small>
            </div>
        </div>






 </div>



















































































































    </div>
</div>
