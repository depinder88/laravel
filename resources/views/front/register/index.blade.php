@extends('layout.app')
@section('title','Home Page')

@section('body')


<section id="service" class="section-padding">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      
                        
					  <div class="col-md-6 text-center">
					  <h2 style="padding-top:25%;font-weight:600;">Staging<br><br> demo<br><br>How it works?</h2>
					  
					  </div>
					  <div class="col-md-6">
					  <img src="images/girl.png" alt="image">
					  </div>
                    </div>
                </div>      
            </div>
        </section>

        <section id="cta-1" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <h3 class="text-center thin">All the elements of project management and collaboration</br>
                        come together with Staging.</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 highlight ">
                                <div class="nborder">
                                    <div class="count-circle">1</div>
                                    <div class="h-caption"><h4>Plan better</h4></div>
                                    <div class="h-body text-center">
                                        <p class="center">Staging provides your team the right tools to plan ahead. Define goals, share ideas and develop strategies to get the best out of your team.
                                        
                                        </p>
                                        <p><a href="#">Planning features </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 highlight">
                                <div class="nborder">
                                    <div class="count-circle">2</div>
                                    <div class="h-caption"><h4>Collaborate</h4></div>
                                    <div class="h-body text-center">
                                        <p>With Staging collaboration tools your teams can share ideas, discuss matters, provide feedback, find answers and stay in sync.</p>
                                        <p><a href="#">Collaboration features</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 highlight">
                                <div class="count-circle">3</div>
                                <div class="nborder">
                                    <div class="h-caption"><h4>Stay organized</h4></div>
                                    <div class="h-body text-center">
                                        <p>Staging has the right tools to keep work organized. Keep all documents, designs and conversations in one central place. </p>
                                        <p><a href="#">Organizing features</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 highlight">
                                <div class="count-circle">4</div>
                                <div class="nborder">
                                    <div class="h-caption"><h4>Deliver on time</h4></div>
                                    <div class="h-body text-center">
                                        <p>Using Staging, keeping projects on track is easy. View project progress, see how resources are utilized and take required actions to stay on trac

                                        </p>
                                        <p><a href="#">Delivering features</a> </p>
                                    </div>
                                </div>
                                <br> <br>
                            </div>
                            <p class="text-center"><a href="#" class="btn btn-default btn-lg how-proofhub-btn" role="button">See how Staging works</a></p>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <h2 class="text-center top-space">Complete Portfolio and Project management software</h2></br></br>
                    <p class="text-center">Staging gives you all the powerful tools you need to make every project a big success. </p>
                    <br>

                    <div class="row bottmarg">
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/task-management-icon.svg')}}" alt="Time Tracking Icon" width="34" height="34">
                            <h3>Task and Resource management</h3>
                            <p>Create tasks and subtasks, assign them to multiple people and get things done quickly and efficiently.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/time-tarcking-icon.svg')}}" alt="Time Tracking Icon" width="34" height="34">
                            <h3>Time sheets</h3>
                            <p>Capacity planning at Portfolio level, project level. Actual time entry against projects and reporting at Portfolio level.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/gantt-charts-icon.svg')}}" alt="Time Tracking Icon" width="34" height="34">
                            <h3>Gantt charts</h3>
                            <p>Set dependencies between tasks to see how changes in one impact the other and track your project progress.</p>
                        </div>
                    </div> 
                    <div class="row bottmarg">
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/discussion-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Discussions</h3>
                            <p>Create discussion topics and invite your team, clients or anyone involved in the projects to collaborate seamlessly.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/report-icon.svg')}}" alt="Reports Icon" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Reports</h3>
                            <p>Know the status of projects, see how resources are utilized and take required actions to stay on track.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/file-sharing-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>File sharing</h3>
                            <p>Organize your important stuff neatly and securely in files and folders, and share them easily with others.</p>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/calender-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Calendar</h3>
                            <p>Keep track of all your tasks, meetings and appointments; and stay updated on all your deliverables.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/notes-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Notes</h3>
                            <p>Store all your articles, press releases, meeting notes etc. at one place and add collaborators to get their inputs towards these notes.</p>
                        </div>
                    
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/proofing-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Proofing</h3>
                            <p>Streamline the proofing and approval process and share your feedback on files and documents easily.</p>
                        </div>
                    </div>
                    <div class="row bottmarg">
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/interation-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Integrations</h3>
                            <p>Connect all your work scattered across different apps like Box, Dropbox, Freshbooks etc. to Staging.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/chat-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>Chat</h3>
                            <p>Share ideas, discuss issues and find answers by maintaining a clear flow in communication between you and your team members.</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <img class="normal" src="{{asset('images/white-label-icon.svg')}}" alt="Time Tracking Icon" width="34px" height="34px">
                            <h3>White-labeling</h3>
                            <p>Personalize your account to give it a look and feel of your business by adding a logo, using a custom domain name, setting a theme, and lots more.</p>
                            <br> <br><br> <br>
                        </div>
                        <p class="text-center"><a class="btn explore-features-btn" role="button">Give Staging a try. It's Free!</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <div class="testimonials">
                            <div class="active item">
                              <blockquote>
                                  <p class="text-center"> <span class="left-arrow"></span> We are new to Staging and loving it. The team is always very helpful and gets back to us quickly whenever we have questions. Thanks for the great product and service! <span class="right-arrow"></span></p>
                                  <ul class="rating text-center">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                  </ul>
                              </blockquote>
                              <div class="carousel-info text-center">
                                <img alt="" src="{{asset('images/naz-tadjbakhsh.png')}}">
                                <span class="testimonials-name">&mdash; Naz Tadjbakhsh, <b>Taco Bell</b></span>
                                <br> <br><br> <br>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
