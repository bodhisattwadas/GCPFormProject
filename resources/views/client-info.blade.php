 <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>A. Client Information</h3>
                            </div>
                            <div class="card-body">
                            <!-- add gender radio button -->
                            <div class="form-group">
                                <!-- Gender Radio Box -->
                                <label for="gender">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="client_name" id="client_name" placeholder="Enter your name" class="form-control" required>
                            </div>
                            <!-- add address field -->
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control">
                            </div>
                            <!-- add contact number field -->
                            <div class="form-group">
                                <label for="contact">Contact Number:</label>
                                <input type="text" name="contact" id="contact" placeholder="Enter your contact number" class="form-control">
                            </div>
                            <!-- add birthday field -->
                            <div class="form-group">
                                <label for="birthday">Birthday:</label>
                                <input type="date" name="birthday" id="birthday" placeholder="Enter your birthday" class="form-control">
                            </div>
                            <!-- add SSN-->
                            <div class="form-group">
                                <label for="ssn">SSN:</label>
                                <input type="text" name="ssn" id="ssn" placeholder="Enter your SSN" class="form-control">
                            </div>
                            <!-- add email field -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="Enter your email" class="form-control">
                            </div>
                           
                            <div class="form-group">
                                @include('county')
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Co-client Information [Spouse of Client]</h3>
                            </div>
                            <div class="card-body">
                            <!-- add co-client name field -->
                            <div class="form-group">
                                <label for="co_client_name">Co-client Name:</label>
                                <input type="text" name="co_client_name" id="co_client_name" placeholder="Enter full name" class="form-control" required>
                            </div>
                            <!-- add co-client address field -->
                            <div class="form-group">
                                <label for="co_client_address">Co-client Address:</label>
                                <input type="text" name="co_client_address" id="co_client_address" placeholder="Enter address" class="form-control">
                            </div>
                            <!-- add co-client contact number field -->
                            <div class="form-group">
                                <label for="co_client_contact">Co-client Contact Number:</label>
                                <input type="text" name="co_client_contact" id="co_client_contact" placeholder="Enter contact number" class="form-control">
                                </div>
                            <!-- add co-client birthday field -->
                            <div class="form-group">
                                <label for="co_client_birthday">Co-client Birthday:</label>
                                <input type="date" name="co_client_birthday" id="co_client_birthday" placeholder="Enter birthday" class="form-control">
                                </div>
                            <!-- add co-client SSN field -->
                            <div class="form-group">
                                <label for="co_client_ssn">Co-client SSN:</label>
                                <input type="text" name="co_client_ssn" id="co_client_ssn" placeholder="Enter SSN" class="form-control">
                                </div>
                            <!-- add co-client email field -->
                            <div class="form-group">
                                <label for="co_client_email">Co-client Email:</label>
                                <input type="text" name="co_client_email" id="co_client_email" placeholder="Enter email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>