<div class="form-header">
            <h5 class="text-center text-dark my-3">Academic Details</h5>
           </div>

           <div class="form-header">
            <h6 class="text-center text-dark">Primary Level</h6>
           </div>

           <div class="form-group">
                <label for="primary_institution">Institution Name:</label><br/>
                <input id="primary_institution" type="text" name="primary_institution" value="<?php echo (isset($_POST['primary_institution']) ? $_POST['primary_institution'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="primary_year">Year of Graduation:</label><br/>
                <input id="primary_year" type="date" name="primary_year" value="<?php echo (isset($_POST['primary_year']) ? $_POST['primary_year'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="primary_Qualification">Qualification:</label><br/>
                <input id="primary_Qualification" type="text" name="primary_Qualification" value="<?php echo (isset($_POST['primary_Qualification']) ? $_POST['primary_Qualification'] : '')?>" class="form-control"/>
            </div>



            <div class="form-header">
            <h6 class="text-center text-dark">Secondary Level</h6>
           </div>

           <div class="form-group">
                <label for="Secondary_institution">Institution Name:</label><br/>
                <input id="Secondary_institution" type="text" name="Secondary_institution"  value="<?php echo (isset($_POST['Secondary_institution']) ? $_POST['Secondary_institution'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="Secondary_year">Year of Graduation:</label><br/>
                <input id="Secondary_year" type="text" name="Secondary_year"  value="<?php echo (isset($_POST['Secondary_year']) ? $_POST['Secondary_year'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="Secondary_Qualification">Qualification:</label><br/>
                <input id="Secondary_Qualification" type="text" name="Secondary_Qualification" value="<?php echo (isset($_POST['Secondary_Qualification']) ? $_POST['Secondary_Qualification'] : '')?>" class="form-control"/>
            </div>


            <div class="form-header">
            <h6 class="text-center text-dark">Tertaily Level</h6>
           </div>

           <div class="form-group">
                    <label for="Tertaily">Highest level of Education Attained:</label><br/>
                    <select id="Tertaily" class="form-control" name="Tertaily" value="<?php echo (isset($_POST['Tertaily']) ? $_POST['Tertaily'] : '')?>" >
                        <option value="phd">PHD</option>
                        <option value="masters">Masters</option>
                        <option value="degree">Degree</option>
                        <option value="diploma">Diploma</option>
                        <option value="certificate">Certificate</option>
                    </select>
            </div>

           <div class="form-group">
                <label for="Tertaily_institution">Institution Name:</label><br/>
                <input id="Tertaily_institution" type="text" name="Tertaily_institution" value="<?php echo (isset($_POST['Tertaily_institution']) ? $_POST['Tertaily_institution'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="Tertaily_year">Year of Graduation:</label><br/>
                <input id="Tertaily_year" type="text" name="Tertaily_year"  value="<?php echo (isset($_POST['Tertaily_year']) ? $_POST['Tertaily_year'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="Tertaily_Qualification">Qualification:</label><br/>
                <input id="Tertaily_Qualification" type="text" name="Tertaily_Qualification" value="<?php echo (isset($_POST['Tertaily_Qualification']) ? $_POST['Tertaily_Qualification'] : '')?>" class="form-control"/>
            </div>
    