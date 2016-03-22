<?php

/*
Lista todos os discentes do PPGP
TODO: 
- filtrar por turma
- link do docente para sua página oficial, exemplo: https://sigaa.ufrn.br/sigaa/public/docente/portal.jsf?siape=1064645
*/
require_once("ClientOpenSIG.php");
require_once("ClientPPGP.php");

$ppgp = new ClientPPGP();
$equipe = $ppgp->equipe();

?>

<h3>Corpo Docente do PPGP</h3>

<table style="text-align: center">
    
    <tr>
        <th>Nome</th>
        <th>Vínculo</th>
        <th>Nível</th>
        <th>E-mail</th>
    </tr>
    
    <?php foreach ($equipe as $membro): ?>
    
    <tr id="<?php echo $membro['idEquipePrograma']; ?>">
        <td><?php echo $membro['nome']; ?></td>
        <td><?php echo $membro['vinculo']; ?></td>
        <td><?php echo $membro['nivel']; ?></td>
        <td><?php echo $membro['email']; ?></td>
    </tr>
    
    <?php endforeach; ?>
    
</table>