
   <div style="height:50vh">
           <div class="form-header">
            <h5 class="text-center text-dark">Vacancy Details</h5>
           </div>

           <div class="form-group">
                    <label for="vac">Vacancy/post title:</label><br/>
                    <select id="vac" class="form-control" name="vacancy" value="<?php echo (isset($_POST['vacancy']) ? $_POST['vacancy'] : '')?>" >
                    <option value="Economist" >Economist</option>
                    <option value="ICT officer">ICT officer</option>
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Driver" >Driver</option>
                    <option value="Trade development officer">Trade development officer</option>
                   <option value="Chief officer directorite development">Chief officer directorite development</option>
                   <option value="Labotary Technologist">Labotary Technologist</option>
                     <option value="Medical specialist">Medical specialist</option>
                     <option value="Nutrition and Dietetics officer">Nutrition and Dietetics officer</option>
                     <option value="Health records officer">Health records officer</option>
                     </select>
            </div>
</div>
