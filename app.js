
const buttonSrcPokemon = document.getElementById('srcPokemon')
buttonSrcPokemon.addEventListener('click', generaPokemon)



function generaPokemon(){
    n = getRandomInt(1,906)
  console.log(n)
    
    fetchData()
  
 }

function getRandomInt(min, max){
    return Math.floor(Math.random() * (max-min)) + min;
}





const fetchData = async () => {
   try{
        const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${n}`)
        const data = await res.json()
        
        console.log(data)

        const img = data.sprites.front_default
        $('#card').removeClass("d-none")
        $('#pokeImg').attr("src", img)
        $('#pokeName').html(data.name)

        const sqlname= data.name
        const sqlimg= data.sprites.front_default
        const sqlid= data.id
        
        console.log(sqlname, sqlimg, sqlid)

        $.getJSON("insertp.php",{id_pokemon:sqlid, nombre:sqlname, img:sqlimg}, function(resp){
            console.log("Resultado:" + resp.mensaje);
        })

    }catch(error){
    console.log(error)
    } 
   


}