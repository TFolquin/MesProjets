
<main class="addContainer">
    <h2>Ajout de personnage</h2>


    <form id="addForm" action="">
        <input type="hidden" name="page" value="add">
        <input type="hidden" name="confirmed">
        <label>Nom du personnage:
            <br>
            <input type="text" name="nom">
        </label>
        <label>Sa région:
            <br>
            <select name="region" id="">
                <option value="Bandle">Bandle</option>
                <option value="Piltover">Piltover</option>
                <option value="Demacia">Demacia</option>
                <option value="Noxus">Noxus</option>
                <option value="Ixtal">Ixtal</option>
                <option value="Freljord">Freljord</option>
                <option value="Bilgewater">Bilgewater</option>
                <option value="Neant">Neant</option>
                <option value="Zaun">Zaun</option>
                <option value="Shurima">Shurima</option>
                <option value="Targon">Targon</option>
                <option value="Iles Obscures">Iles Obscures</option>
                <option value="Ionia">Ionia</option>
            </select>
        </label>
        <label>Son histoire:
            <br>
            <textarea rows="5" cols="33" type="text" name="histoire"></textarea>
        </label>
        <label>Lien vers son image:
            <br>
            <input type="text" name="image">
        </label>
        <button type="submit">Ajouter un personnage</button>



    </form>
</main>