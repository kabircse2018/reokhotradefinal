@extends('layouts.frontend')

@section('title', "Study Abroad Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')
<div class="banner banner-static has-bg bg-secondary has-bg-image">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">

                <div class="banner-text">
                    <p>{{$Studysubcategory->studysubcategory_name}}</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"><span>{{$Studysubcategory->studysubcategory_name}}</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-bg imagebg bg-image-loaded" style="background-image: url(&quot;image/banner-inner.jpg&quot;);">
        <img src="image/banner-inner.jpg" alt="Reokho Trade">
    </div>
</div>

<div class="section section-contents section-contact section-pad">
    <div class="container">
        <div class="content row">
            @if(session()->get('lang') == 'japan')
            <div class="contact-content row">
                <div class="contact-details col-md-10 col-md-offset-1">
                    <img src="{{ asset($Studysubcategory->studysubcategory_image) }}"> 
                    <h1 class="">{{$Studysubcategory->studysubcategory_name_jpn}}</h1>
                    <p>{!! substr($Studysubcategory->studysubcategory_description_jpn, 0) !!}</p>
                </div>
            </div>
            @else
            <div class="contact-content row">
                <div class="contact-details col-md-10 col-md-offset-1">
                    <img src="{{ asset($Studysubcategory->studysubcategory_image) }}"> 
                    <h1 class="">{{$Studysubcategory->studysubcategory_name}}</h1>
                    <p>{!! substr($Studysubcategory->studysubcategory_description, 0) !!}</p>
                </div>
            </div>
            @endif
            

        </div>
        
    </div>
</div>


<div class="content-section">
    <h6 class="heading-sm-lead color-secondary with-line center">Accordion - Style 1</h6>
    <div class="gaps size-2x"></div>
    <div class="row">
        <div class="col-md-6 col-sm-12 res-m-bttm">
            <!-- Accordion -->
            <div class="panel-group accordion filled" id="general" role="tablist" aria-multiselectable="true">
                <!-- each panel for accordion -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="ques-i1">
                        <h4 class="panel-title">
                            <a class="active" role="button" data-toggle="collapse" data-parent="#general" href="#ques-ans-i1" aria-expanded="true">
                                How does it works?
                                <span class="plus-minus"><span></span></span>
                            </a>
                        </h4>
                    </div>
                    <div id="ques-ans-i1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="ques-i1">
                        <div class="panel-body">
                              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt.</p>
                        </div>
                    </div>
                </div>
                <!-- each panel for accordion -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="ques-i2">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#general" href="#ques-ans-i2" aria-expanded="false">
                                How long my product reach?
                                <span class="plus-minus"><span></span></span>
                            </a>
                        </h4>
                    </div>
                    <div id="ques-ans-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ques-i2">
                        <div class="panel-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch Food truck quinoa nesciunt.</p>
                        </div>
                    </div>
                </div>
                <!-- each panel for accordion -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="ques-i3">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#general" href="#ques-ans-i3" aria-expanded="false">
                                   Should I expect to pay fees?
                                <span class="plus-minus"><span></span></span>
                            </a>
                        </h4>
                    </div>
                    <div id="ques-ans-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ques-i3">
                        <div class="panel-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch Food truck quinoa nesciunt.</p>
                        </div>
                    </div>
                </div>
                <!-- each panel for accordion -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="ques-i4">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#general" href="#ques-ans-i4" aria-expanded="false">
                                   What are typical considerations?
                                <span class="plus-minus"><span></span></span>
                            </a>

                        </h4>
                    </div>
                    <div id="ques-ans-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ques-i4">
                        <div class="panel-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch Food truck quinoa nesciunt.</p>
                        </div>
                    </div>
                </div>
                <!-- end each panel -->
            </div>
            <!-- Accordion #end -->
        </div>
        <div class="col-md-6 col-sm-12 pad-l">
            <a href="#"><img src="image/service-b.jpg" alt=""></a>
        </div>
    </div>
    <hr>
</div>

<!-- End Content -->
@endsection




