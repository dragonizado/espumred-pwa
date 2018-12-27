const CACHE_NAME = "pwa-demo-ed-cache-v1",
urlsToCache = [
	'./',
	'./sw.js',
	'./?utm=homescreen',
	'./index.php',
	'./favicon.ico',
	'./assets/css/style.css',
	'./assets/js/scripts.js',
	'./assets/img/icon_57x57.png',
	'./assets/img/icon_72x72.png',
	'./assets/img/icon_96x96.png',
	'./assets/img/icon_114x114.png',
	'./assets/img/icon_144x144.png',
	'./assets/img/icon_192x192.png',
	'./assets/img/icon_256x256.png',
	'./assets/img/icon_384x384.png',
	'./assets/img/icon_512x512.png',
	'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css',
	'https://fonts.googleapis.com/icon?family=Material+Icons',
	'https://code.jquery.com/jquery-3.3.1.slim.min.js',
	'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js',
	'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'
];

self.addEventListener('install',(e)=>{
	console.log("Evento: SW instalado");
	e.waitUntil(
		caches.open(CACHE_NAME)
		.then(cache =>{
			console.log('archivos en cache');
			return cache.addAll(urlsToCache);
		})
		.catch(err =>{
			console.log('Fallo registro del cache',err);
		})
	);
});

self.addEventListener('activate',(e)=>{
	console.log("Evento: SW activado");
	const cacheList = [CACHE_NAME];
	e.waitUntil(
		caches.keys()
		.then(cacheNames=>{
			return Promise.all(
				cacheNames.map(cacheName=>{
					if(cacheList.indexOf(cacheName) === -1){
						return caches.delete(cacheName);
					}
				})
			);
		})
		.then(()=>{
			console.log('El cache esta limpio y actualizado.');
			return self.clients.claim();
		})
		.catch()
	);
});

self.addEventListener('fetch',(e)=>{
	console.log("Evento: SW recuperando");
	e.respondWith(
		caches.match(e.request)
		.then(res =>{
			console.log('recuperando cache');
			if(res){
				return res;
			}else{
				return fetch(e.request)
				.then(res =>{
					let resToCache = res.clone();

					caches.open(CACHE_NAME)
					.then(cache=>{
						cache.put(e.request,resToCache)
						.catch(err=>{console.log(`${e.request.url}: ${err.message}`)})
					});
					return res;
				}).catch();
			}
		})
		.catch()
	);
});

self.addEventListener('push',(e)=>{
	console.log("evento push");

	let title = "Demostración de notificación",
	option = {
		body:'Click para regresar a la aplicación',
		icon:'./assets/img/icon_192x192.png',
		vabrate:[100,50,100],
		data:{
			id:1		
		},
		actions:[
				{
					'action':'si',
					'title':'quiero esta aplicacion :D',
					icon:'./assets/img/icon_192x192.png'
				},
				{
					'action':'no',
					'title':'no quiero esta aplicacion :(',
					icon:'./assets/img/icon_192x192.png'
				}
				]
	}

	e.waitUntil(self.registration.showNotification(title,option));

});