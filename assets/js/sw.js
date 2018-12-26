const CACHE_NAME = "pwa-demo-ed-cache-v1",
urlsToCache = [
	'/espumredApp/',
	'/espumredApp/?utm=homescreen',
	'/espumredApp/index.php',
	'/espumredApp/index.php?utm=homescreen',
	'/espumredApp/favicon.ico',
	'/espumredApp/assets/css/style.css',
	'/espumredApp/assets/js/scripts.js',
	'/espumredApp/assets/js/sw.js',
	'/espumredApp/assets/img/57x57.png',
	'/espumredApp/assets/img/72x72.png',
	'/espumredApp/assets/img/96x96.png',
	'/espumredApp/assets/img/114x114.png',
	'/espumredApp/assets/img/144x144.png',
	'/espumredApp/assets/img/192x192.png',
	'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
	'https://use.fontawesome.com/releases/v5.6.3/css/all.css',
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
		icon:'./img/192x192.png',
		vabrate:[100,50,100],
		data:{
			id:1		
		},
		actions:[
				{
					'action':'si',
					'title':'quiero esta aplicacion :D',
					icon:'./img/192x192.png'
				},
				{
					'action':'no',
					'title':'no quiero esta aplicacion :(',
					icon:'./img/192x192.png'
				}
				]
	}

	e.waitUntil(self.registration.showNotification(title,option));

});