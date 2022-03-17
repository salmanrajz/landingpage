@extends('layouts/contentLayoutMaster')
@section('title', 'Home Page')

@section('vendor-style')
{{-- vendor css files --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/css/forms/select/select2.min.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/css/editors/quill/katex.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/editors/quill/monokai-sublime.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/editors/quill/quill.snow.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/editors/quill/quill.bubble.css') }}"> --}}
{{-- <script src="https://cdn.tiny.cloud/1/2mrbou8da9x4ojjd4wsp5gqez8qhlsee7z5myu0wy8ewepu7/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script> --}}

@endsection

@section('content')
{{-- <div class="row">
  <div class="col-12">
    <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
  </div>
</div> --}}
<!-- Basic table -->
<section id="basic-vertical-layouts">

    <div id="page" class="page container-fluid">
        <div id="page_background_color" class="row">
            <div class="content content--popup-overflow-visible kartra-sticking-topmenu"
                style="background-color: rgb(255, 255, 255); padding: 0px;" id="_611ba7534a4cb">
                <div class="overflow_background_wrapper">
                    <div class="background_changer background_changer--blur0"
                        style="background-image: none; opacity: 1;"></div>
                    {{-- <div class="background_changer_overlay" style="background-image: none;"></div> --}}
                </div>
                @include('layouts.navsection')
            </div>

           <div class="content content--padding-extra-large kartra_hero_section_shadow"
                style="background-color: rgb(0, 145, 214); padding: 60px 0px 40px;" id="_scw691lx6">
                <div class="background_changer background_changer--blur0 js-bg-next-gen" style="opacity: 0.1;"
                    data-bg='url("http://d1aettbyeyfilo.cloudfront.net/Kartra/5157608_15647018620824977214_1563315627047600236_1525675481644pattern01_6d38108d7e5e37d93fc829d50267f806.jpg")'>
                </div>
                {{-- <div class="background_changer_overlay" style="background-image: none;"></div> --}}
                <div class="container">
                    <div class="row" data-component="grid">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="js_kartra_component_holder">
                                <div data-component="text" id="1RgpbBLlir">
                                    <div class="kartra_text"
                                        style="position: relative; margin-top: 0px; margin-bottom: 20px;">
                                        <h1 style="line-height: 1em; text-align: center; margin-bottom: 0px;">
                                            <strong><span style="line-height: 1em;"><span
                                                        style="color: rgb(255, 255, 255); font-family: lato; font-size: 1.8rem; line-height: 1em;"><span
                                                            style="color: rgb(255, 255, 255); font-family: lato; font-size: 1.8rem; line-height: 1em;">​</span>Y</span><span
                                                        style="color: rgb(255, 255, 255); font-family: lato; text-shadow: rgba(0, 0, 0, 0.3) 1px 1px 2px; font-size: 1.8rem; line-height: 1em;">our
                                                        Online Business Made Easy</span></span></strong></h1>
                                    </div>
                                </div>
                                <div data-component="text" id="gZ88mFIjei">
                                    <div class="kartra_text kartra_text--font-weight-regular kartra_text--lato-font kartra_text--deep-pale-golden kartra_text--size-big-special-small kartra_text--text-center kartra_text--margin-bottom-extra-large kartra_text--sm-margin-bottom-extra-medium"
                                        style="margin-top: 0px; margin-bottom: 40px; position: relative;">
                                        <h2><span style="line-height: 1em;"><strong><span
                                                        style="line-height: 1em;"><span
                                                            style="font-size: 1.2rem; line-height: 1em;">Finally,
                                                            everything you need, all in one
                                                            place!</span></span></strong></span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row background_changer--blur0" data-component="grid"
                        style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; margin-top: 0px; background-image: none; opacity: 1;">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="js_kartra_component_holder">


                                <div class="kartra_video_wrapper">
                                    <div class="kartra_video__pattern-2">
                                        <span class="kartra_video__pattern--top"></span>
                                        <span class="kartra_video__pattern--bottom"></span>
                                    </div>
                                    <div data-component="video"
                                        data-thumbnail="https://www.caryaati.com/logo/1-01.png?id=1646759127"
                                        data-screenshot="false">
                                        <div class="kartra_video kartra_video--player_7 kartra_video_containereXUIjqnR6WZa js_kartra_trackable_object"
                                            style="margin: 0px 0px 40px; padding-bottom: 56.25%;" data-kt-type="video"
                                            data-kt-value="eXUIjqnR6WZa" data-kt-owner="R8g82rqP"
                                            id="eXUIjqnR6WZa/aabec/?autoplay=true&amp;mute_on_start=true&amp;show_controls=true&amp;skin=11"
                                            data-random_str="aabec">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Q76_zHC7GWk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row" data-component="grid" id="LMTyo1QKb1">
                        <div class="col-md-6">
                            <div class="js_kartra_component_holder">
                                <div data-component="button">
                                    {{-- <a href="https://www.youtube.com/embed/Q76_zHC7GWk"
                                        class="kartra_button14 kartra_button14--bg-white kartra_button14--inter-font kartra_button14--font-weight-bold kartra_button14--shadow-01 sm-pull-center kartra_button14--hollow kartra_button14--large kartra_button14--squared kartra_button14--shadow-medium pull-right toggle_video"
                                        data-frame-id="_scw691lx6"
                                        onmouseover="this.style.color='#fff';this.style.backgroundColor='rgb(95, 195, 225)';this.style.borderColor='rgb(95, 195, 225)';if (this.querySelector('.fa')) this.querySelector('.fa').style.color='#fff'"
                                        onmouseout="this.style.color='rgb(255, 255, 255)';this.style.borderColor='rgb(255, 255, 255)';this.style.backgroundColor='transparent';if (this.querySelector('.fa')) this.querySelector('.fa').style.color='rgb(255, 255, 255)'"
                                        style="border-color: rgb(255, 255, 255); background-color: transparent; color: rgb(255, 255, 255); margin: 0px 0px 20px; font-weight: 700; font-family: Lato;"
                                        data-video="i2QARjhB1Ca4"
                                        data-video-src="/video_front/index_pages/i2QARjhB1Ca4/0/?mute_on_start=false&amp;show_controls=true&amp;editor=true"
                                        data-video-type="kartra" data-video-external="false" data-asset-id="2"
                                        target="_parent">Watch Demo</a> --}}
                                        <a href="https://www.youtube.com/embed/Q76_zHC7GWk" class="kartra_button14 kartra_button14--bg-white kartra_button14--inter-font kartra_button14--font-weight-bold kartra_button14--shadow-01 sm-pull-center kartra_button14--hollow kartra_button14--large kartra_button14--squared kartra_button14--shadow-medium pull-right toggle_video">Watch Demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="js_kartra_component_holder">
                                <div data-component="button">
                                    <a href="https://app.kartra.com/redirect_to/?asset=page&amp;id=tsPXd5x29Q9c"
                                        class="kartra_button14 kartra_button14--bg-jungle-green kartra_button14--inter-font kartra_button14--font-weight-bold kartra_button14--shadow-01 sm-pull-center kartra_button14--solid kartra_button14--large kartra_button14--squared kartra_button14--shadow-medium pull-left toggle_pagelink"
                                        data-frame-id="_scw691lx6"
                                        style="background-color: rgb(251, 192, 45); color: rgb(78, 52, 46); margin: 0px 0px 20px; font-weight: 700; font-family: Lato;"
                                        data-project-id="1" data-page-id="1227" target="_parent">Start Your Trial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content content--padding-giant content--sm-padding-top-bottom-extra-large-adjust-important"
                style="background-color: rgb(244, 244, 244); padding: 100px 0px 80px;" id="_7esdb7jnb">
                <div class="background_changer background_changer--blur0 js-bg-next-gen" style="opacity: 0.1;" alt=""
                    data-bg='url("http://d1aettbyeyfilo.cloudfront.net/Kartra/4977564_15633178766413019526_154739189369212_973ecd541f3987c5295aadf427bc3a64.png")'>
                </div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div class="container">
                    <div class="row row--equal" data-component="grid">
                        <div class="col-md-6 column--sm-padding-left-right-big-tiny-important background_changer--blur0"
                            style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; padding: 0px 40px 0px 15px; background-image: none; opacity: 1;">
                            <div class="js_kartra_component_holder">
                                <div data-component="image" href="javascript: void(0);">
                                    <div class="kartra_element_wrapper__pattern-2">
                                        <span class="kartra_element_wrapper__pattern--top"></span>
                                        <span class="kartra_element_wrapper__pattern--bottom"></span>
                                    </div>
                                    <picture>
                                        <source type="image/webp"
                                            data-srcset="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png">
                                        </source>
                                        <source type="image/png"
                                            data-srcset="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png">
                                        </source><img
                                            class="kartra_image kartra_image--shadow-small kartra_image--full pull-left background_changer--blur0"
                                            src="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png"
                                            id="1546250117812_formbutton"
                                            style="border-width: 0px; margin: 0px 0px 30px; opacity: 1;"
                                            data-original="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png">
                                    </picture>
                                </div>
                                <div class="kartra_headline_block kartra_headline_block--flex kartra_headline_block--padding-top-tiny pull-left"
                                    data-component="bundle" id="zjE34kVkP6_vmYMTCZiYH" style="margin: 0px 0px 60px;">
                                    <div class="kartra_headline_block__index">
                                        <div class="kartra_icon kartra_icon--no-border kartra_icon--medium kartra_icon--dark-orange-three kartra_icon--circled kartra_icon--center kartra_icon--top-none kartra_icon--margin-bottom-extra-small kartra_icon--margin-right-extra-small-important"
                                            style="background-color: #ffe497;">
                                            <span class="kartra_icon__icon fa fa-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="kartra_headline_block__info kartra_headline_block__info--flex-one">
                                        <div data-component="text">
                                            <div class="kartra_text kartra_text--size-medium kartra_text--lato-font kartra_text--light-firebrick kartra_text--font-weight-regular"
                                                style="position: relative;">
                                                <p><i>The key to craft amazing emails is a modern, comprehensive and
                                                        easy to use email builder. Caryaati Mail offers just that, and
                                                        then some more!</i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="js_kartra_component_holder">




                                <div data-component="headline" id="JhKjXb26xB">
                                    <div class="kartra_headline kartra_headline--size-sm-giant kartra_headline--lato-font kartra_headline--very-dark-slate-blue kartra_headline--margin-bottom-big-tiny"
                                        style="position: relative; margin-top: 0px; margin-bottom: 15px;">
                                        <p style="line-height: 1.2em; font-size: 1.6rem;"><strong><span
                                                    style="font-size: 1.6rem; line-height: 1.2em;"><span
                                                        style="line-height: 1.2em; font-size: 1.6rem;">Best Fleet Management System - GPS Tracking</span></span></strong></p>
                                    </div>
                                </div>
                                <div data-component="divider" id="bzxamR2BBI">
                                    <hr
                                        class="kartra_divider kartra_divider--border-special-small kartra_divider--dotted kartra_divider--border-mid-slate-grey-opaque-50 kartra_divider--small kartra_divider--small-size-01 pull-left kartra_divider--margin-bottom-tiny kartra_divider--margin-top-big-tiny">
                                </div>
                                <div data-component="list">
                                    <ul class="kartra_list">
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);" id="JlBvU51hH3">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1525696417769_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span class="kartra_icon__icon fa fa-random"
                                                    style="color: rgb(246, 79, 100);"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Behavior-Based Automations</p>


                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>
                                                        CarYaati Fleet Management module amplifies the use of each vehicle by continuously tracking its utilization and associated maintenance, damage and servicing costs, the assert management and several reports allow optimal fleet planning and ROI for each vehicle type. We accomplished this goal with followings


                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1525696761096_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-columns"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div
                                                    class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny">
                                                    <p>Intelligent Split Testing</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Caryaati can split-test your email contents and subject lines,
                                                        track conversions, and finally switch to whichever version
                                                        converts the best — automagically.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1525696761096_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-paint-brush"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Glorious Templates</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Select from an assortment of gorgeous, expertly designed
                                                        templates and components including hero sections, content
                                                        blocks, countdown timers, testimonials, video thumbnails and
                                                        more. Simply drag, drop, copy, paste and type to customize your
                                                        emails in seconds.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1525696761096_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-plug"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Personalize the message with {Custom_Tags}</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Hey, {first_name},  I see you joined my newsletter on
                                                        {join_date}. How's been your experience so far? If you have any
                                                        trouble, feel free to contact our representative for the
                                                        {country} market.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content--padding-large content--sm-padding-top-bottom-extra-large-adjust-important"
                style="background-color: rgb(255, 255, 255); padding: 120px 0px 80px;" id="_9s89wunsk">
                <div class="background_changer background_changer--blur0 js-bg-next-gen" style="opacity: 0.05;" alt=""
                    data-bg='url("http://d1aettbyeyfilo.cloudfront.net/Kartra/684688_1526293639828pattern_9.png")'>
                </div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div class="container">
                    <div class="row row--equal" data-component="grid">
                        <div class="col-md-6">
                            <div class="js_kartra_component_holder">



                                <div data-component="headline" id="ZSscK11Dua">
                                    <div class="kartra_headline kartra_headline--size-sm-giant kartra_headline--lato-font kartra_headline--very-dark-slate-blue kartra_headline--margin-bottom-big-tiny"
                                        style="position: relative; margin-top: 0px; margin-bottom: 15px;">
                                        <p style="line-height: 1.2em; font-size: 1.4rem;"><strong><span
                                                    style="font-size: 1.4rem; line-height: 1.2em;"><span
                                                        style="line-height: 1.2em; font-size: 1.4rem;">Next-gen email
                                                        automations</span></span></strong></p>
                                    </div>
                                </div>
                                <div data-component="divider" id="E1gaKFSIjU">
                                    <hr
                                        class="kartra_divider kartra_divider--border-special-small kartra_divider--dotted kartra_divider--border-mid-slate-grey-opaque-50 kartra_divider--small kartra_divider--small-size-01 pull-left kartra_divider--margin-bottom-tiny kartra_divider--margin-top-big-tiny">
                                </div>
                                <div data-component="text" id="WpV5s6U47j">
                                    <div class="kartra_text kartra_text--extra-small kartra_text--lato-font kartra_text--font-weight-regular kartra_text--mid-slate-grey kartra_text--margin-bottom-special-large"
                                        style="position: relative; margin-top: 0px; margin-bottom: 60px;">
                                        <p>The true genius of Caryaati Email is how it tracks and acts on your readers'
                                            actions.</p>

                                        <p> </p>

                                        <p>Thanks to its powerful <strong>IF and THEN automation system</strong>, Kartra
                                            will automatically follow up with your customers for you, based on whether
                                            or not they open your emails, whether they click on a link, whether they are
                                            subscribed to a certain list, whether they carry a certain tag, or whether
                                            they have purchased a certain product, etc.</p>

                                        <p> </p>

                                        <p>The beauty of it is that it's truly automated: you pre-define the conditional
                                            rules and the system will execute them instantly as they happen...
                                            completely hands-free!</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-6 column--sm-padding-left-right-big-tiny-important background_changer--blur0"
                            style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; padding: 0px 15px 0px 40px; background-image: none; opacity: 1;">
                            <div class="js_kartra_component_holder">
                                <div data-component="image" href="javascript: void(0);">
                                    <div class="kartra_element_wrapper__pattern-2">
                                        <span class="kartra_element_wrapper__pattern--top"></span>
                                        <span class="kartra_element_wrapper__pattern--bottom"></span>
                                    </div>
                                    <picture>
                                        <source type="image/webp"
                                            data-srcset="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png">
                                        </source>
                                        <source type="image/png"
                                            data-srcset="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png">
                                        </source><img
                                            class="kartra_image kartra_image--full pull-left background_changer--blur0"
                                            src="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png"
                                            id="1546250897335_formbutton"
                                            style="border-color: rgb(51, 51, 51);border-style: none;border-width: 0px;margin: 0px 0px 20px;opacity: 1;box-shadow: 0px 0px 50px rgba(0,0,0,0.2);"
                                            data-original="https://car-rental-solutions.caryaati.com/img/rent-a-car-sign.png">
                                    </picture>
                                </div>
                                <div class="kartra_headline_block kartra_headline_block--flex kartra_headline_block--padding-top-tiny"
                                    data-component="bundle" id="X1t2tOrEJT">
                                    <div class="kartra_headline_block__index">
                                        <div class="kartra_icon kartra_icon--no-border kartra_icon--medium kartra_icon--dark-orange-three kartra_icon--circled kartra_icon--center kartra_icon--top-none kartra_icon--margin-bottom-extra-small kartra_icon--margin-right-extra-small-important"
                                            style="background-color: #ffe497;">
                                            <span class="kartra_icon__icon fa fa-quote-right"></span>
                                        </div>
                                    </div>
                                    <div class="kartra_headline_block__info kartra_headline_block__info--flex-one">
                                        <div data-component="text">
                                            <div class="kartra_text kartra_text--size-medium kartra_text--lato-font kartra_text--light-firebrick kartra_text--font-weight-regular"
                                                style="position: relative;">
                                                <p><i>Let automations do the heavy lifting for you. Set and forget,
                                                        baby... set and forget!</i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content  content--padding-large content--sm-padding-extra-large-important"
                style="background-color: rgb(255, 255, 255); padding: 80px 0px 0px;" id="_j68ofy906">
                <div class="background_changer background_changer--blur0 js-bg-next-gen" style="opacity: 0.2;" alt=""
                    data-bg='url("http://d1aettbyeyfilo.cloudfront.net/Kartra/685141_1526296979579pattern_10.png")'>
                </div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div class="container">
                    <div class="row row--equal" data-component="grid">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="js_kartra_component_holder">
                                <div data-component="headline">
                                    <div class="kartra_headline kartra_headline--text-center kartra_headline--size-sm-giant kartra_headline--lato-font kartra_headline--line-height-extra-medium kartra_headline--very-dark-slate-blue"
                                        style="position: relative; margin-top: 0px; margin-bottom: 15px;">
                                        <p style="line-height: 1.2em;"><strong><span style="line-height: 1.2em;">Your
                                                    emails fully analyzed</span></strong></p>
                                    </div>
                                </div>
                                <div data-component="text">
                                    <div class="kartra_text kartra_text--size-big-special-small kartra_text--text-center kartra_text--lato-font kartra_text--font-weight-regular kartra_text--royal-blue-two kartra_text--margin-bottom-special-medium"
                                        style="position: relative; margin-top: 0px; margin-bottom: 80px;">
                                        <p>EVERY SEND OUT, OPEN, CLICK AND DOLLAR IS TRACKED IN REAL TIME</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="row row--equal background_changer--blur0" data-component="grid"
                        style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; margin-top: 0px; margin-bottom: 40px; background-image: none; opacity: 1;">
                        <div class="col-md-6">
                            <div class="js_kartra_component_holder">
                                <div data-component="list">
                                    <ul class="kartra_list">
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1525708899581_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-envelope-o"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Opens, clicks and goals</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Are your leads engaging with your campaigns? Are they reading
                                                        your emails? Are those emails generating sales? Find out in your
                                                        analytics! </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1525708934149_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-calendar"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Optimal day of the week and time of the day</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Caryaati will tell which day of the week and time of the day scores
                                                        a better response from your leads. Simply schedule your emails
                                                        accordingly and maximize your conversions!</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="js_kartra_component_holder">
                                <div data-component="list">
                                    <ul class="kartra_list">
                                        <li class="kartra_list__item kartra_list__item--flex"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1547397235289_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-unlink"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Unsubscriptions and spam complaints</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Some emails just don't work: they either don't draw enough
                                                        attention, or they spike your unsubscription/spam ratios. Keep
                                                        an eye on it and tweak them as necessary.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="kartra_list__item kartra_list__item--flex" id="zOrCzzgNw9"
                                            href="javascript: void(0);">
                                            <div class="kartra_icon kartra_icon--deep-coral-04 kartra_icon--no-shrink kartra_icon--top-adjust kartra_icon--negative-margin-top-big-tiny kartra_icon--large"
                                                id="1547397394428_formbutton"
                                                style="background-color: rgba(0, 0, 0, 0); margin: -15px auto 0px;">
                                                <span style="color: rgb(246, 79, 100);"
                                                    class="kartra_icon__icon fa fa-dollar"></span>
                                            </div>
                                            <div
                                                class="kartra_item_info kartra_item_info--padding-left-extra-small kartra_item_info--flex-1">
                                                <div class="kartra_item_info__headline kartra_item_info__headline--very-dark-slate-blue kartra_item_info__headline--lato-font kartra_item_info__headline--font-weight-bold kartra_item_info__headline--h5 kartra_item_info__headline--margin-bottom-tiny"
                                                    style="position: relative;">
                                                    <p>Revenue ratios</p>
                                                </div>
                                                <div class="kartra_item_info__text kartra_item_info__text--size-medium kartra_item_info__text--lato-font kartra_item_info__text--font-weight-regular kartra_item_info__text--mid-slate-grey kartra_item_info__text--margin-bottom-extra-medium"
                                                    style="position: relative;">
                                                    <p>Dollar per send out. Dollar per recipient in your newsletter.
                                                        Dollar per click. Etc. Knowing your revenue ratios will help you
                                                        track the effectiveness of your mailing campaigns.</p>


                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="content kartra_hero_section_shadow"
                style="padding: 80px 0px; background-color: rgb(0, 145, 214);" id="_l76y58avh">
                <div class="background_changer background_changer--blur0 js-bg-next-gen" style="opacity: 0.2;"
                    data-bg='url("http://d1aettbyeyfilo.cloudfront.net/Kartra/4977448_15633171068383019748_154739802124120_bfc3026d48c3c0e658f623e7e94de7f6.jpg")'>
                </div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div class="container">
                    <div class="row" data-component="grid" id="XzAtARYrEJ">
                        <div class="col-md-12">
                            <div class="js_kartra_component_holder">

                                <div data-component="divider">

                                </div>
                                <div data-component="headline">
                                    <div class="kartra_headline kartra_headline--size-giant kartra_headline--roboto-font kartra_headline--font-weight-regular kartra_headline--line-height-extra-medium kartra_headline--text-center kartra_headline--light-black kartra_headline--margin-bottom-small"
                                        style="position: relative; margin-top: 0px; margin-bottom: 40px;">
                                        <p style="font-size: 1.6rem; line-height: 1.2em;"><span
                                                style="color: rgb(255, 255, 255); text-shadow: rgba(0, 0, 0, 0.3) 1px 1px 2px; font-size: 1.6rem; line-height: 1.2em;">Are
                                                You <strong>Ready</strong> To Join the Caryaati Revolution?</span></p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="row" data-component="grid" id="l9eC6AUPCF">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="js_kartra_component_holder">



                                <div class="inline_elements_wrapper" style="justify-content: center;">
                                    <div data-component="button" style="width: auto;">
                                        <a href="javascript: void(0);"
                                            class="kartra_button1 kartra_button1--yellow kartra_button1--deep-yellow kartra_button1--shadow-01 kartra_button1--kp-home-01-sm-padding-left-right-small kartra_button1--hollow kartra_button1--large kartra_button1--squared pull-center toggle_video"
                                            style="font-weight: 400; background-color: transparent; color: rgb(255, 255, 255); margin: 0px auto 20px; font-family: Roboto; border-color: rgb(255, 255, 255);"
                                            data-frame-id="_l76y58avh"
                                            onmouseover="this.style.color='#fff';this.style.backgroundColor='rgb(0, 55, 97)';this.style.borderColor='rgb(0, 55, 97)';if (this.querySelector('.fa')) this.querySelector('.fa').style.color='#fff'"
                                            onmouseout="this.style.color='rgb(255, 255, 255)';this.style.borderColor='rgb(255, 255, 255)';this.style.backgroundColor='transparent';if (this.querySelector('.fa')) this.querySelector('.fa').style.color='rgb(255, 255, 255)'"
                                            data-video="i2QARjhB1Ca4"
                                            data-video-src="/video_front/index_pages/i2QARjhB1Ca4/0/?mute_on_start=false&amp;show_controls=true&amp;editor=true"
                                            data-video-type="kartra" data-video-external="false" data-asset-id="2"
                                            target="_parent">PRODUCT DEMO</a>
                                    </div>
                                    <div data-component="button" style="width: auto;">
                                        <a href="https://home.kartra.com/plans"
                                            class="kartra_button1 kartra_button1--white-dark-text kartra_button1--shadow-01 kartra_button1--kp-home-01-sm-padding-left-right-small kartra_button1--solid kartra_button1--large kartra_button1--squared kartra_button1--shadow-small pull-center toggle_pagelink "
                                            style="font-weight: 700; background-color: rgb(251, 192, 45); color: rgb(78, 52, 46); margin: 0px auto 20px; font-family: Lato;"
                                            data-frame-id="_l76y58avh" target="_parent">START YOUR TRIAL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content--padding-medium content--padding-bottom-none"
                style="background-color: rgb(250, 250, 250); padding: 40px 0px 0px;" id="_61b243a8695f3">
                <div class="background_changer background_changer--blur0" style="background-image: none; opacity: 0.2;">
                </div>
                <div class="background_changer_overlay" style="background-image: none;"></div>
                <div>
                    <div>
                        <div class="container">
                            <div class="row row--equal" data-component="grid">
                                <div class="background_changer--blur0 col-md-4"
                                    style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; padding: 0px 15px; background-image: none; opacity: 1;">
                                    <div class="js_kartra_component_holder">

                                        <div data-component="image" href="javascript: void(0);">
                                            <picture>
                                                <source type="image/webp"
                                                    data-srcset="//d1aettbyeyfilo.cloudfront.net/Kartra/5000946_15634773924263659549_155260453668258_2047dd4021a8277a0f533dd652965ccc.webp">
                                                </source>
                                                <source type="image/png"
                                                    data-srcset="http://d1aettbyeyfilo.cloudfront.net/Kartra/5000946_15634773924263659549_155260453668258_2047dd4021a8277a0f533dd652965ccc.png">
                                                </source><img
                                                    class="kartra_image kartra_image--max-width-full sm-pull-center kartra_image--margin-bottom-extra-medium pull-left background_changer--blur0"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    id="1552602661281_formbutton"
                                                    style="border-width: 0px; margin: 0px 0px 20px; opacity: 1; width: 183px; max-width: 100%; height: auto;"
                                                    data-original="http://d1aettbyeyfilo.cloudfront.net/Kartra/5000946_15634773924263659549_155260453668258_2047dd4021a8277a0f533dd652965ccc.png">
                                            </picture>
                                        </div>
                                        <div data-component="text" id="Dl91OWIZcq">
                                            <div class="kartra_text kartra_text--open-sans kartra_text--dim-grey kartra_text--sm-text-center kartra_text--margin-bottom-tiny"
                                                style="position: relative;">
                                                <p><strong>Genesis Digital LLC</strong><br>
                                                    4730 S. Fort Apache Rd. Suite 300</p>

                                                <p>Las Vegas, NV 89147-7947<br>
                                                    +1 (858) 869-9533</p>
                                            </div>
                                        </div>
                                        <div class="social_icons_wrapper social_icons_wrapper--flex social_icons_wrapper--align-left social_icons_wrapper--sm-align-center social_icons_wrapper--margin-bottom-extra-medium social_icons_wrapper--negative-margin-left-right-extra-tiny pull-left"
                                            data-component="bundle" style="margin: 0px -5px 40px;"
                                            id="sbj9BleUxu_89Q3AEzSZJ">
                                            <div data-component="icon">
                                                <a href="https://www.facebook.com/groups/kartra/" target="_blank"
                                                    class="toggle_pagelink " data-frame-id="_61b243a8695f3">
                                                    <div class="kartra_icon kartra_icon--circled kartra_icon--no-border kartra_icon--hover-opacity-medium kartra_icon--white kartra_icon--margin-left-right-extra-tiny kartra_icon--small"
                                                        style="background-color: rgb(59, 89, 152); margin: 0px auto; border-color: rgb(255, 255, 255);"
                                                        id="1552602780242_formbutton">
                                                        <span class="kartra_icon__icon fa fa-facebook"
                                                            style="color: rgb(255, 255, 255);"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div data-component="icon">
                                                <a href="https://twitter.com/KartraOfficial" target="_blank"
                                                    class="toggle_pagelink " data-frame-id="_61b243a8695f3">
                                                    <div class="kartra_icon kartra_icon--circled kartra_icon--no-border kartra_icon--hover-opacity-medium kartra_icon--white kartra_icon--margin-left-right-extra-tiny kartra_icon--small"
                                                        style="background-color: rgb(85, 172, 238); margin: 0px auto; border-color: rgb(255, 255, 255);"
                                                        id="1552602805551_formbutton">
                                                        <span class="kartra_icon__icon fa fa-twitter"
                                                            style="color: rgb(255, 255, 255);"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div data-component="icon" href="javascript: void(0);">
                                                <a href="https://www.youtube.com/channel/UCvA4Pk4DFIyKBP-esjP-Ruw"
                                                    target="_blank" class="toggle_pagelink "
                                                    data-frame-id="_61b243a8695f3">
                                                    <div class="kartra_icon kartra_icon--circled kartra_icon--no-border kartra_icon--hover-opacity-medium kartra_icon--white kartra_icon--margin-left-right-extra-tiny kartra_icon--small"
                                                        style="background-color: rgb(197, 0, 0);margin: 0px auto;border-color: rgb(255, 255, 255);"
                                                        id="1552602856418_formbutton">
                                                        <span style="color: rgb(255, 255, 255);"
                                                            class="kartra_icon__icon fa fa-youtube-play"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div data-component="icon" href="javascript: void(0);">
                                                <a href="https://www.instagram.com/kartraofficial/" target="_blank"
                                                    class="toggle_pagelink " data-frame-id="_61b243a8695f3">
                                                    <div class="kartra_icon kartra_icon--circled kartra_icon--no-border kartra_icon--hover-opacity-medium kartra_icon--white kartra_icon--margin-left-right-extra-tiny kartra_icon--small"
                                                        style="background-color: rgb(105, 105, 105);margin: 0px auto;border-color: rgb(255, 255, 255);"
                                                        id="1552602938058_formbutton">
                                                        <span style="color: rgb(255, 255, 255);"
                                                            class="kartra_icon__icon fa fa-instagram"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 background_changer--blur0"
                                    style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; padding: 0px 15px; background-image: none; opacity: 1;">
                                    <div class="js_kartra_component_holder">
                                        <div class="kartra_link_wrapper kartra_link_wrapper--flex kartra_link_wrapper--flex-direction-column kartra_link_wrapper--align-left kartra_link_wrapper--sm-align-center kartra_link_wrapper--md-margin-bottom-extra-small pull-center"
                                            data-component="bundle" style="margin: 0px auto 20px;"
                                            id="I2Ah3fB730_zGKbeBMGZM">
                                            <a class="kartra_list__link kartra_list__link--open-sans-font kartra_list__link--font-weight-bold kartra_list__link--margin-bottom-extra-small kartra_list__link--light-black kartra_list__link--hover-opacity-giant toggle_pagelink"
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=2pYCn1NaS9Cp"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(66, 66, 66); font-weight: 700; font-family: Open Sans;"
                                                target="_blank" data-project-id="1" data-page-id="1529">Support
                                                Helpdesk</a>
                                            <a class="kartra_list__link kartra_list__link--open-sans-font kartra_list__link--font-weight-bold kartra_list__link--margin-bottom-extra-small kartra_list__link--light-black kartra_list__link--hover-opacity-giant toggle_pagelink"
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=Wsn6VxZm5XdT"
                                                data-frame-id="_61b243a8695f3"
                                                style='color: rgb(66, 66, 66);font-weight: 700;font-family: "Open Sans";/* margin-bottom: 10px; */'
                                                data-project-id="3" data-page-id="1530" target="_parent">Affiliate
                                                Program</a><a
                                                class="kartra_list__link kartra_list__link--open-sans-font kartra_list__link--font-weight-bold kartra_list__link--margin-bottom-extra-small kartra_list__link--light-black kartra_list__link--hover-opacity-giant toggle_pagelink"
                                                href="https://app.kartra.com/login" data-frame-id="_61b243a8695f3"
                                                style='color: rgb(66, 66, 66);font-weight: 700;font-family: "Open Sans";/* margin-bottom: 10px; */'
                                                target="_parent">User Log In</a><a
                                                class="kartra_list__link kartra_list__link--open-sans-font kartra_list__link--font-weight-bold kartra_list__link--margin-bottom-extra-small kartra_list__link--light-black kartra_list__link--hover-opacity-giant toggle_pagelink"
                                                href="https://genesisdigital.co/" data-frame-id="_61b243a8695f3"
                                                style='color: rgb(66, 66, 66);font-weight: 700;font-family: "Open Sans";/* margin-bottom: 10px; */'
                                                target="_blank">Our Company</a><a
                                                class="kartra_list__link kartra_list__link--open-sans-font kartra_list__link--font-weight-bold kartra_list__link--margin-bottom-extra-small kartra_list__link--light-black kartra_list__link--hover-opacity-giant toggle_pagelink"
                                                href="https://www.genesisdigital.co/core-values/"
                                                data-frame-id="_61b243a8695f3"
                                                style='color: rgb(66, 66, 66);font-weight: 700;font-family: "Open Sans";/* margin-bottom: 10px; */'
                                                target="_blank">Company Core Values</a><a
                                                class="kartra_list__link kartra_list__link--open-sans-font kartra_list__link--font-weight-bold kartra_list__link--margin-bottom-extra-small kartra_list__link--light-black kartra_list__link--hover-opacity-giant toggle_pagelink"
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=pIajN4nJ2TYf"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(66, 66, 66); font-weight: 700; font-family: Open Sans;"
                                                target="_blank" data-project-id="1" data-page-id="1256">Compare
                                                Kartra</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 background_changer--blur0"
                                    style="background-color: rgba(0, 0, 0, 0); border-radius: 0px; border-style: none; border-width: 0px; padding: 0px 15px; background-image: none; opacity: 1;">
                                    <div class="js_kartra_component_holder">
                                        <div class="kartra_link_wrapper kartra_link_wrapper--flex kartra_link_wrapper--flex-direction-column kartra_link_wrapper--align-left kartra_link_wrapper--sm-align-center kartra_link_wrapper--md-margin-bottom-extra-small pull-right"
                                            data-component="bundle" id="GLTEJM9uPF_vinLKX1kL5"
                                            style="margin: 0px 0px 20px;">
                                            <a class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=DvtKo57WkwYf"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="548" target="_parent">Terms &amp;
                                                Conditions</a>
                                            <a class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=EL5yD1YaRT9c"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="545" target="_parent">DMCA</a>
                                            <a class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=5pg6GYyn3AZa"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="543" target="_parent">GDPR</a>
                                            <a class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=4tBIE0FV8JYf"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="547" target="_parent">Privacy
                                                Policy</a><a
                                                class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=YhZ1D5i6N8Za"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="544" target="_parent">Acceptable
                                                Use</a>
                                            <a class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=ZetBX7f4GooQ"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="546" target="_parent">Billing
                                                Policy</a><a
                                                class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=sWBeC51ZbAoQ"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="726" target="_parent">EULA</a><a
                                                class="kartra_list__link kartra_list__link--lato-font kartra_list__link--font-weight-regular kartra_list__link--margin-bottom-tiny kartra_list__link--semi-pro-white kartra_list__link--hover-opacity-giant toggle_pagelink "
                                                href="https://app.kartra.com/redirect_to/?asset=page&amp;id=0KY8hlRNbaoQ"
                                                data-frame-id="_61b243a8695f3"
                                                style="color: rgb(117, 117, 117); font-weight: 400; font-family: Lato;"
                                                data-project-id="1" data-page-id="727" target="_parent">DPA</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row row--equal" data-component="grid" id="7paT6mz0If">
                                <div class="col-md-12">
                                    <div class="js_kartra_component_holder js_kartra_component_holder--height-auto">
                                        <div data-component="divider" id="CbpJk7mQUP">
                                            <hr class="kartra_divider kartra_divider--border-extra-tiny kartra_divider--border-full-transparent-white kartra_divider--margin-bottom-tiny pull-left kartra_divider--full"
                                                style="border-color: rgba(0, 0, 0, 0.06); border-top-style: solid; border-top-width: 1px; margin: 0px 0px 10px;">
                                        </div>
                                        <div data-component="text">
                                            <div class="kartra_text kartra_text--open-sans kartra_text--font-weight-regular kartra_text--white-opaque-75 kartra_text--text-center"
                                                style="position: relative; margin-top: 0px; margin-bottom: 40px;">
                                                <p><span style="color:#A9A9A9;">© Copyrights, <strong><span
                                                                style="color: rgb(169, 169, 169);">Genesis Digital
                                                                LLC</span></strong>. All Rights Reserved.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <script async defer src="https://app.kartra.com/js/build/front/pages/optin.js"></script>
    </div>

</section>
<!--/ Basic table -->

@endsection


@section('vendor-script')
{{-- vendor files --}}
{{-- <script src="{{ asset('admin/vendors/js/editors/quill/katex.min.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/vendors/js/editors/quill/highlight.min.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/vendors/js/editors/quill/quill.min.js') }}"></script> --}}
<script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js') }}"></script>

@endsection
@section('page-script')

<style>
    input {
        text-transform: uppercase;
    }

</style>
{{-- <script src="{{ asset('admin/js/scripts/forms/form-quill-editor.js') }}"></script> --}}

{{-- <script src="{{ asset('js/scripts/tables/table-datatables-basic.js') }}"></script> --}}
@endsection
