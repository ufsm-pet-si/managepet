@extends('layouts.app')

@section('content')
    <div id="main">
        <!-- START WRAPPER -->

            <!-- START LEFT SIDEBAR NAV-->

            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row mt-1">
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">add_shopping_cart</i>
                                            <p>Orders</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">690</h5>
                                            <p class="no-margin">New</p>
                                            <p>6,00,00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">perm_identity</i>
                                            <p>Clients</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">1885</h5>
                                            <p class="no-margin">New</p>
                                            <p>1,12,900</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">timeline</i>
                                            <p>Sales</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">80%</h5>
                                            <p class="no-margin">Growth</p>
                                            <p>3,42,230</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">attach_money</i>
                                            <p>Profit</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">$890</h5>
                                            <p class="no-margin">Today</p>
                                            <p>$25,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div id="card-stats">-->
                    <!--  <div class="row">-->
                    <!--    <div class="col s12 m6 l3">-->
                    <!--      <div class="card">-->
                    <!--        <div class="card-content cyan white-text">-->
                    <!--          <p class="card-stats-title">-->
                    <!--            <i class="material-icons">person_outline</i> New Clients</p>-->
                    <!--          <h4 class="card-stats-number">566</h4>-->
                    <!--          <p class="card-stats-compare">-->
                    <!--            <i class="material-icons">keyboard_arrow_up</i> 15%-->
                    <!--            <span class="cyan text text-lighten-5">from yesterday</span>-->
                    <!--          </p>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--    <div class="col s12 m6 l3">-->
                    <!--      <div class="card">-->
                    <!--        <div class="card-content red accent-2 white-text">-->
                    <!--          <p class="card-stats-title">-->
                    <!--            <i class="material-icons">attach_money</i>Total Sales</p>-->
                    <!--          <h4 class="card-stats-number">$8990.63</h4>-->
                    <!--          <p class="card-stats-compare">-->
                    <!--            <i class="material-icons">keyboard_arrow_up</i> 70%-->
                    <!--            <span class="red-text text-lighten-5">last month</span>-->
                    <!--          </p>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--    <div class="col s12 m6 l3">-->
                    <!--      <div class="card">-->
                    <!--        <div class="card-content teal accent-4 white-text">-->
                    <!--          <p class="card-stats-title">-->
                    <!--            <i class="material-icons">trending_up</i> Today Profit</p>-->
                    <!--          <h4 class="card-stats-number">$806.52</h4>-->
                    <!--          <p class="card-stats-compare">-->
                    <!--            <i class="material-icons">keyboard_arrow_up</i> 80%-->
                    <!--            <span class="teal-text text-lighten-5">from yesterday</span>-->
                    <!--          </p>-->
                    <!--        </div>-->

                    <!--      </div>-->
                    <!--    </div>-->
                    <!--    <div class="col s12 m6 l3">-->
                    <!--      <div class="card">-->
                    <!--        <div class="card-content deep-orange accent-2 white-text">-->
                    <!--          <p class="card-stats-title">-->
                    <!--            <i class="material-icons">content_copy</i> New Invoice</p>-->
                    <!--          <h4 class="card-stats-number">1806</h4>-->
                    <!--          <p class="card-stats-compare">-->
                    <!--            <i class="material-icons">keyboard_arrow_down</i> 3%-->
                    <!--            <span class="deep-orange-text text-lighten-5">from last month</span>-->
                    <!--          </p>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->
                    <!--</div>-->
                    <!--card stats end-->

                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">
                            <div class="col s12 m4 l4">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header teal accent-4">
                                        <h4 class="task-card-title">My Task</h4>
                                        <p class="task-card-date">Sept 16, 2017</p>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task1"/>
                                        <label for="task1">Create Mobile App UI.
                                            <a href="#" class="secondary-content">
                                                <span class="ultra-small">Today</span>
                                            </a>
                                        </label>
                                        <span class="task-cat cyan">Mobile App</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task2"/>
                                        <label for="task2">Check the new API standerds.
                                            <a href="#" class="secondary-content">
                                                <span class="ultra-small">Monday</span>
                                            </a>
                                        </label>
                                        <span class="task-cat red accent-2">Web API</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task3" checked="checked"/>
                                        <label for="task3">Check the new Mockup of ABC.
                                            <a href="#" class="secondary-content">
                                                <span class="ultra-small">Wednesday</span>
                                            </a>
                                        </label>
                                        <span class="task-cat teal accent-4">Mockup</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task4" checked="checked" disabled="disabled"/>
                                        <label for="task4">I did it !</label>
                                        <span class="task-cat deep-orange accent-2">Mobile App</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m12 l4">
                                <div id="flight-card" class="card">
                                    <div class="card-header deep-orange accent-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">Flight</h4>
                                            <p class="flight-card-date">June 18, Thu 04:50</p>
                                        </div>
                                    </div>
                                    <div class="card-content-bg white-text">
                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">LDN</h4>
                                                        <p class="ultra-small">London</p>
                                                    </div>
                                                </div>
                                                <div class="col s2 m2 l2 center-align">
                                                    <i class="material-icons flight-icon">local_airport</i>
                                                </div>
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">SFO</h4>
                                                        <p class="ultra-small">San Francisco</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 m6 l6 center-align">
                                                    <div class="flight-info">
                                                        <p class="small">
                                                            <span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                                                        <p class="small">
                                                            <span class="grey-text text-lighten-4">Flight:</span> IB 5786
                                                        </p>
                                                        <p class="small">
                                                            <span class="grey-text text-lighten-4">Terminal:</span> B</p>
                                                    </div>
                                                </div>
                                                <div class="col s6 m6 l6 center-align flight-state-two">
                                                    <div class="flight-info">
                                                        <p class="small">
                                                            <span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                                                        <p class="small">
                                                            <span class="grey-text text-lighten-4">Flight:</span> IB 5786
                                                        </p>
                                                        <p class="small">
                                                            <span class="grey-text text-lighten-4">Terminal:</span> C</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div id="profile-card" class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="images/gallary/3.png" alt="user bg">
                                    </div>
                                    <div class="card-content">
                                        <img src="images/avatar/avatar-7.png" alt=""
                                             class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                                        <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                                        <p>
                                            <i class="material-icons">perm_identity</i> Project Manager</p>
                                        <p>
                                            <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                                        <p>
                                            <i class="material-icons">email</i> yourmail@domain.com</p>
                                    </div>
                                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Roger Waters
                        <i class="material-icons right">close</i>
                      </span>
                                        <p>Here is some more information about this card.</p>
                                        <p>
                                            <i class="material-icons">perm_identity</i> Project Manager</p>
                                        <p>
                                            <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                                        <p>
                                            <i class="material-icons">email</i> yourmail@domain.com</p>
                                        <p>
                                            <i class="material-icons">cake</i> 18th June 1990
                                        </p>
                                        <p>
                                        </p>
                                        <p>
                                            <i class="material-icons">airplanemode_active</i> BAR - AUS
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card widgets end-->

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="material-icons cyan circle">card_travel</i>
                                        <h6 class="collection-header m-0">Projects</h6>
                                        <p>Your Favorites</p>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s9">
                                                <p class="collections-title">Web App</p>
                                                <p class="collections-content">AEC Company</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">Development</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s9">
                                                <p class="collections-title">Mobile App for Social</p>
                                                <p class="collections-content">iSocial App</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat red accent-2">UI/UX</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s9">
                                                <p class="collections-title">Website</p>
                                                <p class="collections-content">MediTab</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat teal accent-4">Marketing</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s9">
                                                <p class="collections-title">AdWord campaign</p>
                                                <p class="collections-content">True Line</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat deep-orange accent-2">SEO</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="material-icons red accent-2 circle">bug_report</i>
                                        <h6 class="collection-header m-0">Issues</h6>
                                        <p>Assigned to you</p>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title">
                                                    <strong>#102</strong> Home Page</p>
                                                <p class="collections-content">Web Project</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat deep-orange accent-2">P1</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 70%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title">
                                                    <strong>#108</strong> API Fix</p>
                                                <p class="collections-content">API Project </p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat cyan">P2</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 40%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title">
                                                    <strong>#205</strong> Profile page css</p>
                                                <p class="collections-content">New Project </p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat red accent-2">P3</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 95%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title">
                                                    <strong>#188</strong> SAP Changes</p>
                                                <p class="collections-content">SAP Project</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat teal accent-4">P1</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 10%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--work collections end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 border-bottom-1 mt-5">
                                <ul class="tabs">
                                    <li class="tab col s4">
                                        <a href="#activity" class="active">
                                            <span class="material-icons">graphic_eq</span>
                                        </a>
                                    </li>
                                    <li class="tab col s4">
                                        <a href="#chatapp">
                                            <span class="material-icons">face</span>
                                        </a>
                                    </li>
                                    <li class="tab col s4">
                                        <a href="#settings">
                                            <span class="material-icons">settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="settings" class="col s12">
                                <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                                <ul class="collection border-none">
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Notifications</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show recent activity</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Notifications</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show recent activity</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show your emails</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show Task statistics</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                    </li>
                                </ul>
                            </div>
                            <div id="chatapp" class="col s12">
                                <div class="collection border-none">
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-1.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Elizabeth Elliott </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                                        <span class="line-height-0">Mary Adams </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Caleb Richards </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-4.png" alt="" class="circle cyan">
                                        <span class="line-height-0">June Lane </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Edward Fletcher </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                                        <span class="line-height-0">Crystal Bates </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-7.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Nathan Watts </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Willard Wood </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Ronnie Ellis </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-1.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Gwendolyn Wood </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Daniel Russell </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Sarah Graves </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Andrew Hoffman </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="images/avatar/avatar-5.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Camila Lynch </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                                    </a>
                                </div>
                            </div>
                            <div id="activity" class="col s12">
                                <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                                <div class="activity">
                                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#" class="deep-purple-text medium-small">just now</a>
                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe
                                            Purchased new equipments for zonal office.</p>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next
                                                flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                            <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya
                                                Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay
                                                open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list row">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail
                                                for conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                            <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya
                                                Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay
                                                open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list row">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail
                                                for conference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </aside>
            <!-- END RIGHT SIDEBAR NAV-->
        </div>
        <!-- END WRAPPER -->
    </div>
@endsection