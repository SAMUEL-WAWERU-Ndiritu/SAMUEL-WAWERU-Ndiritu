
     <h4 class="text-center text-info p-3">Submission:</h4>
     <p>Upload Any Supportive Documents: <br>
        <input type="file" name="name_file"  value="<?php echo (isset($_POST['name_file']) ? $_POST['name_file'] : '')?>">
       </p>
           <p>I hereby certify to the best of my knowledge that the particulars given on this form are correct and I understand that any in correct information may lead to disqualification/legal action</p>
           <input type="radio" name="declaration_status"  value="yes">Yes
            <input type="radio" name="declaration_status" value="no">No
            <p>If yes continue with submission</p>
           
           
    