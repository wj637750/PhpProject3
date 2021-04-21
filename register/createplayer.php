<!DOCTYPE html>
<html>
    <?php include 'view\header.php'?>
    <div id="wrapper">
        <h1>Player Creator</h1>
        <form action="index.php" method="post" id="confirm_player">
            <input type="hidden" name="action" value="confirm_player" />
            
        <?php if (!empty($errorName)) {
            ?> <p id="error"><?php echo htmlspecialchars($errorName);
            } ?></p>
        <br>
        <!-- input name -->        
        <label>Player Name</label>
        <input type="text" name="Name"
               value="<?php echo htmlspecialchars($Name); ?>"
        <br>
        <br>
        <!-- input class -->
        <label>Select class</label>
        <?php if (!empty($errorClass)) { ?>
                <p class="error"><?php echo htmlspecialchars($errorClass); ?></p>
            <?php } ?>
        <div id="radioButtons">
            <input type="radio" name="Class" value="Knight"><label>Knight</label>
            <input type="radio" name="Class" value="Rouge"><label>Rouge</label>
            <input type="radio" name="Class" value="Wizard"><label>Wizard</label>
        </div>
        
        <input type="submit" value="Create new Player">
        <br>
        
        </form>
        
        
        
        
    </div>
    
    
    
</html>

