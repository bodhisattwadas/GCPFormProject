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
            <!-- add married/unmarried radio button -->
            <div class="form-group">
                <label for="marital_status">Marital Status</label>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status" value="married" checked>
                        <label class="form-check-label" for="married">
                            Married
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status" value="unmarried">
                        <label class="form-check-label" for="unmarried">
                            Unmarried
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
                <input type="text" name="client_address" id="client_address" placeholder="Enter your address" class="form-control">
            </div>
            <!-- add contact number field -->
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="text" name="client_phone" id="client_phone" placeholder="Enter your contact number" class="form-control">
            </div>
            <!-- add birthday field -->
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" name="client_birthday" id="client_birthday" placeholder="Enter your birthday" class="form-control">
            </div>
            <!-- add SSN-->
            <div class="form-group">
                <label for="ssn">SSN:</label>
                <input type="text" name="client_ssn" id="client_ssn" placeholder="Enter your SSN" class="form-control">
            </div>
            <!-- add email field -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="client_email" id="client_email" placeholder="Enter your email" class="form-control">
            </div>
           
            <div class="form-group">
                

                <label for="county">County</label>
                <select class="form-control" id="county_name" name="county_name">
                    
                                <option value="Appling">Appling</option>
                                <option value="Atkinson">Atkinson</option>
                                <option value="Bacon">Bacon</option>
                                <option value="Baker">Baker</option>
                                <option value="Baldwin">Baldwin</option>
                                <option value="Banks">Banks</option>
                                <option value="Barrow">Barrow</option>
                                <option value="Bartow">Bartow</option>
                                <option value="Ben Hill">Ben Hill</option>
                                <option value="Berrien">Berrien</option>
                                <option value="Bibb">Bibb</option>
                                <option value="Bleckley">Bleckley</option>
                                <option value="Brantley">Brantley</option>
                                <option value="Brooks">Brooks</option>
                                <option value="Bryan">Bryan</option>
                                <option value="Bulloch">Bulloch</option>
                                <option value="Burke">Burke</option>
                                <option value="Butts">Butts</option>
                                <option value="Calhoun">Calhoun</option>
                                <option value="Camden">Camden</option>
                                <option value="Candler">Candler</option>
                                <option value="Carroll">Carroll</option>
                                <option value="Catoosa">Catoosa</option>
                                <option value="Charlton">Charlton</option>
                                <option value="Chatham">Chatham</option>
                                <option value="Chattahoochee">Chattahoochee</option>
                                <option value="Chattooga">Chattooga</option>
                                <option value="Cherokee">Cherokee</option>
                                <option value="Clarke">Clarke</option>
                                <option value="Clay">Clay</option>
                                <option value="Clayton">Clayton</option>
                                <option value="Clinch">Clinch</option>
                                <option value="Cobb">Cobb</option>
                                <option value="Coffee">Coffee</option>
                                <option value="Colquitt">Colquitt</option>
                                <option value="Columbia">Columbia</option>
                                <option value="Cook">Cook</option>
                                <option value="Coweta">Coweta</option>
                                <option value="Crawford">Crawford</option>
                                <option value="Crisp">Crisp</option>
                                <option value="Dade">Dade</option>
                                <option value="Dawson">Dawson</option>
                                <option value="DeKalb">DeKalb</option>
                                <option value="Decatur">Decatur</option>
                                <option value="Dodge">Dodge</option>
                                <option value="Dooly">Dooly</option>
                                <option value="Dougherty">Dougherty</option>
                                <option value="Douglas">Douglas</option>
                                <option value="Early">Early</option>
                                <option value="Echols">Echols</option>
                                <option value="Effingham">Effingham</option>
                                <option value="Elbert">Elbert</option>
                                <option value="Emanuel">Emanuel</option>
                                <option value="Evans">Evans</option>
                                <option value="Fannin">Fannin</option>
                                <option value="Fayette">Fayette</option>
                                <option value="Floyd">Floyd</option>
                                <option value="Forsyth">Forsyth</option>
                                <option value="Franklin">Franklin</option>
                                <option value="Fulton">Fulton</option>
                                <option value="Gilmer">Gilmer</option>
                                <option value="Glascock">Glascock</option>
                                <option value="Glynn">Glynn</option>
                                <option value="Gordon">Gordon</option>
                                <option value="Grady">Grady</option>
                                <option value="Greene">Greene</option>
                                <option value="Gwinnett">Gwinnett</option>
                                <option value="Habersham">Habersham</option>
                                <option value="Hall">Hall</option>
                                <option value="Hancock">Hancock</option>
                                <option value="Haralson">Haralson</option>
                                <option value="Harris">Harris</option>
                                <option value="Hart">Hart</option>
                                <option value="Heard">Heard</option>
                                <option value="Henry">Henry</option>
                                <option value="Houston">Houston</option>
                                <option value="Irwin">Irwin</option>
                                <option value="Jackson">Jackson</option>
                                <option value="Jasper">Jasper</option>
                                <option value="Jeff Davis">Jeff Davis</option>
                                <option value="Jefferson">Jefferson</option>
                                <option value="Jenkins">Jenkins</option>
                                <option value="Johnson">Johnson</option>
                                <option value="Jones">Jones</option>
                                <option value="Lamar">Lamar</option>
                                <option value="Lanier">Lanier</option>
                                <option value="Laurens">Laurens</option>
                                <option value="Lee">Lee</option>
                                <option value="Liberty">Liberty</option>
                                <option value="Lincoln">Lincoln</option>
                                <option value="Long">Long</option>
                                <option value="Lowndes">Lowndes</option>
                                <option value="Lumpkin">Lumpkin</option>
                                <option value="McDuffie">McDuffie</option>
                                <option value="McIntosh">McIntosh</option>
                                <option value="Macon">Macon</option>
                                <option value="Madison">Madison</option>
                                <option value="Marion">Marion</option>
                                <option value="Meriwether">Meriwether</option>
                                <option value="Miller">Miller</option>
                                <option value="Mitchell">Mitchell</option>
                                <option value="Monroe">Monroe</option>
                                <option value="Montgomery">Montgomery</option>
                                <option value="Morgan">Morgan</option>
                                <option value="Murray">Murray</option>
                                <option value="Muscogee">Muscogee</option>
                                <option value="Newton">Newton</option>
                                <option value="Oconee">Oconee</option>
                                <option value="Oglethorpe">Oglethorpe</option>
                                <option value="Paulding">Paulding</option>
                                <option value="Peach">Peach</option>
                                <option value="Pickens">Pickens</option>
                                <option value="Pierce">Pierce</option>
                                <option value="Pike">Pike</option>
                                <option value="Polk">Polk</option>
                                <option value="Pulaski">Pulaski</option>
                                <option value="Putnam">Putnam</option>
                                <option value="Quitman">Quitman</option>
                                <option value="Rabun">Rabun</option>
                                <option value="Randolph">Randolph</option>
                                <option value="Richmond">Richmond</option>
                                <option value="Rockdale">Rockdale</option>
                                <option value="Schley">Schley</option>
                                <option value="Screven">Screven</option>
                                <option value="Seminole">Seminole</option>
                                <option value="Spalding">Spalding</option>
                                <option value="Stephens">Stephens</option>
                                <option value="Stewart">Stewart</option>
                                <option value="Sumter">Sumter</option>
                                <option value="Talbot">Talbot</option>
                                <option value="Taliaferro">Taliaferro</option>
                                <option value="Tattnall">Tattnall</option>
                                <option value="Taylor">Taylor</option>
                                <option value="Telfair">Telfair</option>
                                <option value="Terrell">Terrell</option>
                                <option value="Thomas">Thomas</option>
                                <option value="Tift">Tift</option>
                                <option value="Toombs">Toombs</option>
                                <option value="Towns">Towns</option>
                                <option value="Treutlen">Treutlen</option>
                                <option value="Troup">Troup</option>
                                <option value="Turner">Turner</option>
                                <option value="Twiggs">Twiggs</option>
                                <option value="Union">Union</option>
                                <option value="Upson">Upson</option>
                                <option value="Walker">Walker</option>
                                <option value="Walton">Walton</option>
                                <option value="Ware">Ware</option>
                                <option value="Warren">Warren</option>
                                <option value="Washington">Washington</option>
                                <option value="Wayne">Wayne</option>
                                <option value="Webster">Webster</option>
                                <option value="Wheeler">Wheeler</option>
                                <option value="White">White</option>
                                <option value="Whitfield">Whitfield</option>
                                <option value="Wilcox">Wilcox</option>
                                <option value="Wilkes">Wilkes</option>
                                <option value="Wilkinson">Wilkinson</option>
                                <option value="Worth">Worth</option>
                        </select>
            
            
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
                <input type="text" name="co_client_phone" id="co_client_phone" placeholder="Enter contact number" class="form-control">
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