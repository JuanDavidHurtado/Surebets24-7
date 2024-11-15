async function loadDiagram() {
  try {
    const usuario_id_sesion = localStorage.getItem('id');

    // Obtener datos del usuario de la sesión
    const response1 = await fetch(`/api/get-usuInv/${usuario_id_sesion}`, {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${localStorage.getItem('token')}`,
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
    });

    if (!response1.ok) {
      throw new Error('Error al obtener datos del usuario');
    }

    const data = await response1.json();
    const id_usu_inv = data[0]?.id_usu_inv; // Usar operador de encadenamiento opcional para manejar casos donde no se obtiene ningún dato


    // Obtener datos de los usuarios referidos
    const response2 = await fetch('/api/nodos-usrInv', {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${localStorage.getItem('token')}`,
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
    });

    if (!response2.ok) {
      throw new Error('Error al obtener datos de los usuarios referidos');
    }

    const dataUsrs = await response2.json();

    const mensaje = getDataUsrsReferidos(dataUsrs, id_usu_inv);

    if (mensaje) {
      console.log(mensaje);
      const mensajeAlert = document.getElementById("mensajeAlert");
      if (mensajeAlert) {
        mensajeAlert.textContent = mensaje;
        mensajeAlert.classList.remove("d-none");
      }

    }


  } catch (error) {
    console.error('Error:', error);
  }
}



function getDataUsrsReferidos(links, id_usu_inv) {
  const datosUsuarioActual = links.filter(d => d.nodo_padre === id_usu_inv);
  if (datosUsuarioActual.length > 0) {
    construirArbolBinario(links, id_usu_inv);
    return null;
  } else {
    return "Actualmente no cuentas con registros de usuarios referidos";
  }
}

function construirArbolBinario(links, id_usu_inv) {
  var nodoRaiz = {
    id: 1,
    usu_inv_id: id_usu_inv,
    nodo_padre: null, // El nodo raíz no tiene nodo padre
    tipo_nodo: 'Raíz',
    posicion: null
  };
  // Obtener todos los nodos relacionados con el usuario_id dado
  const todosNodos = obtenerNodosRelacionados(links, id_usu_inv);
  todosNodos.push(nodoRaiz);

  function datosArbolBinario(datos) {
    const encontrarHijos = (padreId) => {
      const hijos = datos.filter(nodo => nodo.nodo_padre === padreId);


      // Ordenar hijos para asegurar que "izq" está primero y "der" está segundo
      hijos.sort((a, b) => {
        const posicionA = a.posicion.toLowerCase();
        const posicionB = b.posicion.toLowerCase();

        if ((posicionA === 'izq' || posicionA === 'izquierda') && (posicionB === 'der' || posicionB === 'derecha')) {
          return -1;
        } else if ((posicionA === 'der' || posicionA === 'derecha') && (posicionB === 'izq' || posicionB === 'izquierda')) {
          return 1;
        }
        return 0;
      });


      //console.log("hijos ordenados", hijos)
      return hijos.map(hijo => {
        const nodoActual = {
          name: hijo.usu_inv_id.toString(), // Convertir el ID a cadena
          usuNombre: hijo.usuNombre, // Agregar el nombre del usuario
          //Agrego login
          usuLogin: hijo.usuLogin, // Agregar el login de usuario
          puntos: hijo.puntos, // Agregar los puntos del usuario
          posicion: hijo.posicion.substring(0, 3)
        };
        const nietos = encontrarHijos(hijo.usu_inv_id);
        if (nietos.length > 0) {
          nodoActual.children = nietos;
        }
        return nodoActual;
      });
    };

    const nodoRaiz = datos.find(nodo => nodo.nodo_padre === null);
    return {
      name: nodoRaiz.usu_inv_id.toString(),
      children: encontrarHijos(nodoRaiz.usu_inv_id)
    };

  }

  /*function datosArbolBinario(datos) {
    const encontrarHijos = (padreId) => {
      const hijos = datos.filter(nodo => nodo.nodo_padre === padreId);


      // Ordenar hijos para asegurar que "izq" está primero y "der" está segundo
      hijos.sort((a, b) => {
        if (a.posicion === 'izq' && b.posicion === 'der') {
          return -1;
        } else if (a.posicion === 'der' && b.posicion === 'izq') {
          return 1;
        }
        return 0;
      });

      return hijos.map(hijo => {
        const nodoActual = {
          name: hijo.usu_inv_id.toString(), // Convertir el ID a cadena
          usuNombre: hijo.usuNombre, // Agregar el nombre del usuario
          puntos: hijo.puntos, // Agregar los puntos del usuario
          posicion: hijo.posicion.substring(0, 3)
        };
        const nietos = encontrarHijos(hijo.usu_inv_id);
        if (nietos.length > 0) {
          nodoActual.children = nietos;
        }
        return nodoActual;
      });
    };

    const nodoRaiz = datos.find(nodo => nodo.nodo_padre === null);
    return {
      name: nodoRaiz.usu_inv_id.toString(),
      children: encontrarHijos(nodoRaiz.usu_inv_id)
    };

  }*/

  /*function datosArbolBinario(datos) {
    const encontrarHijos = (padreId) => {
        const hijos = datos.filter(nodo => nodo.nodo_padre === padreId);
        return hijos.map(hijo => {
            const nodoActual = {
                name: hijo.usu_inv_id.toString(), // Convertir el ID a cadena
                usuNombre: hijo.usuNombre, // Agregar el nombre del usuario
                puntos: hijo.puntos, // Agregar los puntos del usuario
                posicion: hijo.posicion.substring(0,3)
            };
            const nietos = encontrarHijos(hijo.usu_inv_id);
            if (nietos.length > 0) {
                nodoActual.children = nietos;
            }
            return nodoActual;
        });
    };

    const nodoRaiz = datos.find(nodo => nodo.nodo_padre === null);

    return {
        name: nodoRaiz.usu_inv_id.toString(),
        children: encontrarHijos(nodoRaiz.usu_inv_id)
    };

  }*/
  const treeData1 = datosArbolBinario(todosNodos);

  // Dimensiones del lienzo
  const margin = {
    top: 100,
    right: 90,
    bottom: 30,
    left: 190
  }

  width = 1000 - margin.left - margin.right;
  height = 500 - margin.top - margin.bottom;
  // Crear la estructura de árbol
  // const tree = d3.tree().size([height, width]);
  const tree = d3.tree().size([width, height]);

  // Asignar los nodos y enlaces al layout del árbol
  const root = d3.hierarchy(treeData1, d => d.children);
  const canvasHeight = calculateCanvasHeight(root);
  // Crear el lienzo SVG
  const svg = d3.select("#tree-container").append("svg")
    .attr("width", width + margin.right + margin.left)
    .attr("height", canvasHeight + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


  // root.x0 = height / 2;
  root.x0 = width / 2;
  root.y0 = 0;

  // Función para actualizar el árbol
  function update(source) {
    // Asignar los nodos y enlaces al layout del árbol
    const treeData1 = tree(root);
    const nodes = treeData1.descendants().reverse();
    const links = treeData1.links();

    nodes.forEach(d => d.y = d.depth * 180);

    // Actualizar los nodos
    const node = svg.selectAll('g.node')
      .data(nodes, d => d.id || (d.id = ++i));


    const nodeEnter = node.enter().append('g')
      .attr('class', 'node')
      .attr('transform', d => `translate(${source.y0},${source.x0})`)
      .on('click', click);


    nodeEnter.append('image')
      .attr('xlink:href', '/img/iconPerfilx48.jpeg') // Ruta al icono de perfil
      .attr('width', 48)
      .attr('height', 48)
      .attr('x', -24)
      .attr('y', -24);

    nodeEnter.each(function (d) {
      obtenerImagen(d.data.name, d3.select(this));
    });
    nodeEnter.append('text')
      .attr("dy", "-2em")
      .attr("x", d => d.children || d._children ? 0 : 0)
      .attr("text-anchor", d => d.children || d._children ? "end" : "start")
      // .text(d => [ d.data.usuNombre+"-"+d.data.posicion])
      .text(d => {
        //console.log(d.data.usuLogin)
        if (d.data.usuNombre == null || d.data.usuNombre === undefined) {
          return 'Tu';
        } else {
          //return d.data.usuNombre + "-" + d.data.posicion;
          return d.data.usuLogin + "-" + d.data.posicion;
        }
      })
      .style("fill", "white")
      .style("font-size", "18px");


    const nodeUpdate = nodeEnter.merge(node);

    nodeUpdate.transition()
      .duration(750)
      // .attr('transform', d => `translate(${d.y},${d.x})`);
      .attr('transform', d => `translate(${d.x},${d.y})`);

    nodeUpdate.select('circle.node')
      .attr('r', 10)
      .style("fill", d => d._children ? "lightsteelblue" : "#fff")
      .attr('cursor', 'pointer');

    const nodeExit = node.exit().transition()
      .duration(750)
      // .attr('transform', d => `translate(${source.y},${source.x})`)
      .attr('transform', d => `translate(${source.x},${source.y})`)
      .remove();

    nodeExit.select('circle')
      .attr('r', 1e-6);

    nodeExit.select('text')
      .style('fill-opacity', 1e-6);

    // Actualizar los enlaces
    const link = svg.selectAll('path.link')
      .data(links, d => d.target.id);

    const linkEnter = link.enter().insert('path', "g")
      .attr("class", "link")
      .attr('d', d => {
        const o = { x: source.x0, y: source.y0 };
        return straightLink(o, o);
      });

    const linkUpdate = linkEnter.merge(link);

    linkUpdate.transition()
      .duration(750)
      .attr('d', d => straightLink(d.source, d.target));

    const linkExit = link.exit().transition()
      .duration(750)
      .attr('d', d => {
        const o = { x: source.x, y: source.y };
        return straightLink(o, o);
      })
      .remove();

    nodes.forEach(d => {
      d.x0 = d.x;
      d.y0 = d.y;
    });

    // function straightLink(s, d) {
    //     return `M${s.y},${s.x}L${d.y},${d.x}`;
    // }
    function straightLink(s, d) {
      return `M${s.x},${s.y}L${d.x},${d.y}`;
    }
    function click(event, d) {
      if (d.children) {
        d._children = d.children;
        d.children = null;
      } else {
        d.children = d._children;
        d._children = null;
      }
      update(d);
    }
  }

  let i = 0;
  root.children.forEach(collapse);
  update(root);

  function collapse(d) {
    if (d.children) {
      d._children = d.children;
      d._children.forEach(collapse);
      d.children = null;
    }
  }
}

function calculateCanvasHeight(root) {
  const maxDepth = root.height + 1; // +1 porque el nivel raíz es 0
  const nodeHeight = 200; // Altura fija por nivel (ajusta según tu preferencia)
  return maxDepth * nodeHeight;
}


function obtenerImagen(id, nodo) {
  //console.log("fucnion obtenerImagenes")
  fetch(`/api/obtener_img/${id}`, {
    method: 'GET',
    headers: {
      'Authorization': `Bearer ${localStorage.getItem('token')}`,
      'Accept': 'application/json',
      'X-Requested-With': 'XMLHttpRequest',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  })
    .then(response => {
      if (!response.ok) {
        throw new Error('Error en la respuesta del servidor');
      }
      return response.json();
    })
    .then(data => {
      // Crear una URL Blob para la imagen
      const imagenBase64 = data.imagen;
      const imagenURL = `data:image/*;base64,${imagenBase64}`;

      // Usar la URL de la imagen en D3
      nodo.select("image")
        .attr("xlink:href", imagenURL)
        .attr("width", 45)
        .attr("height", 45);

    })
    .catch(error => {
      console.error('Error al obtener la imagen del producto con ID', id, ':', error);
    });
}

function obtenerNodosRelacionados(links, id_usu_inv) {
  const nodosRelacionados = [];

  // Función recursiva para encontrar nodos directos e indirectos
  function buscarNodos(padreId) {
    const hijos = links.filter(node => node.nodo_padre === padreId);
    nodosRelacionados.push(...hijos); // Agregar los hijos encontrados

    // Llamar recursivamente a la función para cada hijo encontrado
    hijos.forEach(hijo => {
      buscarNodos(hijo.usu_inv_id);
    });
  }

  // Buscar nodos directos e indirectos a partir del usuario_id dado
  buscarNodos(id_usu_inv);

  // Agregar también el nodo raíz si existe
  const nodoRaiz = links.find(node => node.id_usu_inv === id_usu_inv && node.nodo_padre === null);
  if (nodoRaiz) {
    nodosRelacionados.push(nodoRaiz);
  }

  return nodosRelacionados;
}

// Llama a loadDiagram cuando se cargue la vista
window.onload = function () {
  loadDiagram();
};