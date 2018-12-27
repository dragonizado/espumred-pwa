((d,w,n,c)=>{

if('serviceWorker' in navigator){
	w.addEventListener('load',()=>{
		n.serviceWorker.register('/espumredApp/sw.js').then((registration)=>{
			c(registration);
			c('Service Worker se ha registrado correctamente scope:',registration.scope);
		}).catch(err => {
			c('registro de service Worker fallido',err)
		});
	});
}

if(w.Notification && Notification.permission != 'denied'){
	Notification.requestPermission(status =>{
		c(status);
		// let n = new Notification('test',{
		// 	body:'Hola mundo',
		// 	icon:'./img/192x192.png'
		// });

	});

}

})(document,window,navigator,console.log);

((d,w,n,c)=>{
	
})(document,window,navigator,console.log);

((d,w,n,c)=>{
	
})(document,window,navigator,console.log);

((d,w,n,c)=>{
	
})(document,window,navigator,console.log);