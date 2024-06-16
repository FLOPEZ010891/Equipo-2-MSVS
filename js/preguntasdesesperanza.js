const bd_preguntas= [
    {
    id:0,
    pregunta:"Espero el futuro con esperanza y entusiasmo",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:1,
    pregunta:"Puedo darme por vencido, renunciar, ya que no puedo hacer mejor las cosas por mí mismo",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:2,
    pregunta:"Cuando las cosas van mal me alivia saber que las cosas no pueden permanecer tiempo así",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:3,
    pregunta:"No puedo imaginar cómo será mi vida dentro de 10 años",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:4,
    pregunta:"Tengo bastante tiempo para llevar a cabo las cosas que quisiera poder hacer",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:5,
    pregunta:"En el futuro, espero conseguir lo que me pueda interesar",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:6,
    pregunta:"Mi futuro me parece oscuro",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:7,
    pregunta:"Espero más cosas buenas de la vida que lo que la gente suele conseguir por término medio",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:8,
    pregunta:"No logro hacer que las cosas cambien, y no existen razones para creer que pueda en el futuro",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:9,
    pregunta:"Mis pasadas experiencias me han preparado bien para mi futuro",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:10,
    pregunta:"Todo lo que puedo ver por delante de mí es más desagradable que agradable",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:11,
    pregunta:"No espero conseguir lo que realmente deseo",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:12,
    pregunta:"Cuando miro hacia el futuro, espero que seré más feliz de lo que soy ahora",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:13,
    pregunta:"Las cosas no marchan como yo quisiera",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:14,
    pregunta:"Tengo una gran confianza en el futuro",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:15,
    pregunta:"Nunca consigo lo que deseo, por lo que es absurdo desear cualquier cosa",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:16,
    pregunta:"Es muy improbable que pueda lograr una satisfacción real en el futuro",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:17,
    pregunta:"El futuro me parece vago e incierto",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    },
    {
    id:18,
    pregunta:"Espero más bien épocas buenas que malas",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"1"
    },
    {
    id:19,
    pregunta:"No merece la pena que intente conseguir algo que desee, porque probablemente no lo lograré",
    op0:"Verdadero",
    op1:"Falso",
    puntua:"0"
    }
]
//Para guardar las respuestas
let respuestas=[];
//Para guardar la cantidad de preguntas que puntuan
let cantidadPuntua=0;
//Para cargar la pregunta
let numPregunta=0;

//Cargar las preguntas del Json
function cargarPreguntas(){
    const pregunta=bd_preguntas[numPregunta];

    const contenedor =document.createElement("div");
    contenedor.className="contenedor-pregunta";
    contenedor.id= pregunta.id;
    const h2 = document.createElement("h2");
    h2.textContent=pregunta.id+1+"-"+pregunta.pregunta;
    contenedor.appendChild(h2);
    const opciones =document.createElement("di");

    //creacion de labels
    const label1= crearLabel("0", pregunta.op0);
    const label2= crearLabel("1", pregunta.op1);

    //agregar Labels al contenedor
    opciones.appendChild(label1);
    opciones.appendChild(label2);
    contenedor.appendChild(opciones);
    document.getElementById("preguntas").appendChild(contenedor);
}

//Retornar contenido del label
function crearLabel(num, txtOpcion){
    const label = document.createElement("label");
    label.id = "l" + numPregunta + num;
    const input = document.createElement("input");
    input.setAttribute("type", "radio");
    input.name = "p" + numPregunta;
    input.setAttribute("onclick", "seleccionar(" + numPregunta+","+num+")");
    const span = document.createElement("span");
    const correccion = document.createElement("span");
    correccion.id = "p" + numPregunta + num;
    span.textContent = txtOpcion;
    label.appendChild(input);
    label.appendChild(span);
    label.appendChild(correccion);

    return label;
}

//Cargar todas las preguntas
for(i=0; i<bd_preguntas.length;i++){
    cargarPreguntas();
    numPregunta++;
}

//Cargar la opcion elegida en la respuesta
function seleccionar(pos, opElegida){
    respuestas[pos]=opElegida;
}

//Puntuar
let puntuar=document.getElementById("puntuar");
puntuar.onclick=function(){
    for(i=0;i<bd_preguntas.length;i++){
        const pregunta=bd_preguntas[i];
        if(pregunta.puntua==respuestas[i]){
            cantidadPuntua++;
        }
    }
//deshabilitar inputs
let inputs=document.getElementsByTagName("input");
for(i=0;i<inputs.length;i++){
    inputs[i].disabled=true;
}

window.scrollTo(0,0);
alert("RESULTADO \n Tu puntaje es: "+cantidadPuntua +"\n " );
}

