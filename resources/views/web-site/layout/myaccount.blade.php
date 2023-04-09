@extends('web-site.base.main')

@section('content')

<div class="wrapper">
  
    <!-- ========================================= MAIN ========================================= -->
    <main id="about-us">
        <div class="container inner-top-xs inner-bottom-sm">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-3 col-sm-12">
                <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active" style="width: 100%;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">My Posts</a></li>
                            <li role="presentation" style="width: 100%;"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My Orders</a></li>
                            <li role="presentation" style="width: 100%;"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Setting</a></li>
                            <li role="presentation" style="width: 100%;"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Logout</a></li>
                        </ul>

                </div>
                <div class="col-xs-12 col-md-12 col-lg-9 col-sm-12">
                    <div class="content">
 
                        <div class="tab-content">
                            <!-- LOGIN -->
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h3 id="post">My Posts</h3>
                                <!-- One "tab" for each step in the form: -->
                                <div class="tab">
                                  <p><input placeholder="Enter your category" oninput="this.className = ''"></p>
                                </div>
                                
                                <div class="tab">
                                  <p><input placeholder="Select sub category" oninput="this.className = ''"></p>
                                </div>
                                
                                <div class="tab">
                                  <p><input placeholder="Enter the City or Division " oninput="this.className = ''"></p>
                                </div>
                                
                                <div class="tab">
                                  <p><input placeholder="Enter Popular areas" oninput="this.className = ''"></p>
                                </div>
                                
                                <div style="overflow:auto;">
                                  <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                  </div>
                                </div>
                                
                                <!-- Circles which indicates the steps of the form: -->
                                <div style="text-align:center;margin-top:40px;">
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                </div>
                            </div>

                            <!-- Create Account-->
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <h3>My Orders</h3>
                                <div class="panel">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Email Address:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Confirm Email Address:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Password:</label>
                                            <input type="password" class="form-control" id="password" placeholder="********">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Confirm Password:</label>
                                            <input type="password" class="form-control" id="password" placeholder="********">
                                        </div>

                                        <div class="pull-right">
                                            <a class="btn">Continue</a>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <!-- Personal Info-->
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <h3>Personal Info</h3>
                                <div class="panel">
                                    <form>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="firstName">First Name:</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="First Name" data-required>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="middleName">Middle Name:</label>
                                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="lastName">Last Name:</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="phone">Phone Number:</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Phone Number" data-required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="address1">Primary Address:</label>
                                                <input type="text" class="form-control" id="address1" placeholder="Address" data-required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="address2">Primary Address 2:</label>
                                                <input type="text" class="form-control" id="address2" placeholder="Suite/Office/Apt" data-required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="city">City:</label>
                                                <input type="text" class="form-control" id="city" placeholder="City" data-required>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="state">State:</label>
                                                <select class="form-control" id="state" name="state">
                                                    <option>Choose One</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="zipCode">ZIP Code:</label>
                                                <input type="text" class="form-control" id="zipCode" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="text" class="form-control" id="dob" placeholder="mm/dd/yyyy" data-required required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="securityQ1">Security Question 1:</label>
                                                <select class="form-control" id="securityQ1">
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="securityQ2">Security Question 2:</label>
                                                <select class="form-control" id="securityQ2">
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="securityQ3">Security Question 3:</label>
                                                <select class="form-control" id="securityQ3">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="securityA1">Security Answer 1:</label>
                                                <input type="text" class="form-control" id="securityA1" placeholder="securityA1" data-required>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="securityA2">Security Answer 2:</label>
                                                <input type="text" class="form-control" id="securityA2" placeholder="securityA2" data-required>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="securityA1">Security Answer 3:</label>
                                                <input type="text" class="form-control" id="securityA3" placeholder="securityA3" data-required>
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <a class="btn">Finish</a>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <!-- Forgot Password-->
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h3>Forgot Password</h3>
                                <div class="panel">
                                    <form>
                                        <div class="form-group">
                                            <label for="email">Email Address:</label>
                                            <input type="email" class="form-control" id="email" placeholder="jane.doe@example.com">
                                        </div>


                                        <div class="pull-right">
                                            <a class="btn">Continue</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->

    </main><!-- /#about-us -->
</div><!-- /.wrapper -->



@endsection