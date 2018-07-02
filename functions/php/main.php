<?php
/////////////////////////////////////////////////
//Fil d'ariane
/////////////////////////////////////////////////
function get_fil_ariane($array_fil) {
    $fil = '<a href="index.php">' . NOM_SITE . '</a>';
    foreach($array_fil as $url => $lien) {
        $fil .= ' > ';
        if($url == 'final') {
            $fil .= $lien;
            break;
        }
        $fil .= '<a href="' . $url . '">' . $lien . '</a>';
    }
    echo $fil;
}
/////////////////////////////////////////////////
// GET Ambiance
/////////////////////////////////////////////////

try{
    $pdo = new PDO('mysql:dbname=duprec_encasdamour;host:localhost:3306;charset=utf8','duprec_colin','dromar971');
    $pdo->exec('SET NAMES utf8');
} catch( PDOException $e){
    die("Erreur! ".$e->getMessage());
}

/**
 * fonction de requetage des pages
 * @param PDO $pdo
 * @param null|string $slug
 * @param null|int $id
 * @return array data
 */
function get_ambiance(PDO $pdo, $slug = null, $id = null)
{
    $sql = "SELECT
    *
FROM
    `ambiances`
";
    // si criteres de selection, ajout du where
    if(!is_null($slug)||!is_null($id)){
        $sql .= "
WHERE

";
    }
    // init du stack de criteres
    $feignant = array();
    // si slug, ajout critere slug dans stack de criteres
    if(!is_null($slug)) {
        $feignant[] = "
`code_nom` = :code_nom
";
    }
    // si id, ajout critere id dans stack de criteres
    if(!is_null($id)) {
        $feignant[] = "
`id` = :id
";
    }
    // depilage du stack de criteres avec colle "AND"
    $sql .= implode("\nAND ",$feignant);
    // preparation SQL
    $stmt = $pdo->prepare($sql);
    // bind slug
    if(!is_null($slug)) {
        $stmt->bindParam(':code_nom', $slug);
    }
    // bind id
    if(!is_null($id)) {
        $stmt->bindParam(':id', $id);
    }
    // execution SQL
    $stmt->execute();
    // init tableau output
    $data = array();
    // remplissage tableau output
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    // retour donnees
    return $data;
}

/**
 * encapsulation de l'appel à get_produits() pour requete sans critere
 * @param PDO $pdo
 * @return array
 */
function get_ambianceAll(PDO $pdo)
{
    return get_ambiance($pdo);
}

/**
 * encapsulation de l'appel à get_ambiance() pour requete sur un slug
 * @param PDO $pdo
 * @param $slug
 * @return mixed
 */
function get_ambianceSlug(PDO $pdo, $slug)
{
    return current(get_ambiance($pdo, $slug));
}

/**
 * encapsulation de l'appel à get_ambiance() pour requete sur une ID
 * @param PDO $pdo
 * @param $id
 * @return mixed
 */
function get_ambianceId(PDO $pdo, $id)
{
    return current(get_ambiance($pdo, null, $id));
}

/////////////////////////////////////////////////
// GET menu
/////////////////////////////////////////////////
///
try{
    $pdo = new PDO('mysql:dbname=duprec_encasdamour;host:localhost:3306;charset=utf8','duprec_colin','dromar971');
    $pdo->exec('SET NAMES utf8');
} catch( PDOException $e){
    die("Erreur! ".$e->getMessage());
}

/**
 * fonction de requetage des pages
 * @param PDO $pdo
 * @param null|string $slug
 * @param null|int $id
 * @return array data
 */
function get_menu(PDO $pdo, $slug = null, $id = null)
{
    $sql = "SELECT
    *
FROM
    `menus`
";
    // si criteres de selection, ajout du where
    if(!is_null($slug)||!is_null($id)){
        $sql .= "
WHERE

";
    }
    // init du stack de criteres
    $feignant = array();
    // si slug, ajout critere slug dans stack de criteres
    if(!is_null($slug)) {
        $feignant[] = "
`code_menu` = :code_menu
";
    }
    // si id, ajout critere id dans stack de criteres
    if(!is_null($id)) {
        $feignant[] = "
`id` = :id
";
    }
    // depilage du stack de criteres avec colle "AND"
    $sql .= implode("\nAND ",$feignant);
    // preparation SQL
    $stmt = $pdo->prepare($sql);
    // bind slug
    if(!is_null($slug)) {
        $stmt->bindParam(':code_menu', $slug);
    }
    // bind id
    if(!is_null($id)) {
        $stmt->bindParam(':id', $id);
    }
    // execution SQL
    $stmt->execute();
    // init tableau output
    $data = array();
    // remplissage tableau output
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    // retour donnees
    return $data;
}

/**
 * encapsulation de l'appel à get_produits() pour requete sans critere
 * @param PDO $pdo
 * @return array
 */
function get_menuAll(PDO $pdo)
{
    return get_menu($pdo);
}

/**
 * encapsulation de l'appel à get_menu() pour requete sur un slug
 * @param PDO $pdo
 * @param $slug
 * @return mixed
 */
function get_menuSlug(PDO $pdo, $slug)
{
    return current(get_menu($pdo, $slug));
}

/**
 * encapsulation de l'appel à get_menu() pour requete sur une ID
 * @param PDO $pdo
 * @param $id
 * @return mixed
 */
function get_menuId(PDO $pdo, $id)
{
    return current(get_menu($pdo, null, $id));
}