<html>
    <?php include 'view\header.php'?>
    <body>
        <div id="wrapper">
            <h1>Display all Players</h1>
            <br>
            <table>
                <tr>
                    <th>Player Name</th>
                    <th>Player Class</th>
                    <th>Player Score</th>
                    <th>Image</th>
                </tr>
                
                <?php foreach ($players as $player) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($player->getPlayerName()); ?></td>
                    <td><?php echo htmlspecialchars($player->getPlayerClass()); ?></td>
                    <td><?php echo htmlspecialchars($player->getPlayerScore()); ?></td>
                    <td><?php if($player->getPlayerClass() === 'Knight'){
                                $playerImage[0] = 'image/knight.png';
                            } else if($player->getPlayerClass() === 'Rouge'){
                                $playerImage[0] = 'image/rouge.png';
                            } else if($player->getPlayerClass() === 'Wizard'){
                                $playerImage[0] = 'image/wizard.png';
                            } ?>
                        
                            <img src='<?php echo $playerImage[0] ?>' width='50' height = '50'>
                    </td>
                    <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="newimage">
                                <input type="hidden" name="playerID" value="<?php echo htmlspecialchars($player->getPlayerID()); ?>">
                                <input type="submit" value="change Image">
                            </form>
                        </td>

                    
                   
                </tr>
                <?php endforeach; ?> 
                
            </table>

            
            
            
            
        </div>
    </body>
    
    
</html>
