document.write('<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>');

//Alertas 
function alertaGuardar()
{
	$('.alertaGuardar').submit(function(e) {
		e.preventDefault();
	
		Swal.fire({
			title: 'Estas seguro?',
			text: "¡Se guardaran los cambios!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si, Guardalo!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	
	})
}

function alertaBorrar()
{
	$('.alertaBorrar').submit(function(e) {
		e.preventDefault();
	
		Swal.fire({
			title: 'Estas seguro?',
			text: "¡Se Borrara para siempre!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si, Borralo!'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	
	})
}

//Tostadas
function Guardado()
{
	// alert('test');
	const Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	})

	Toast.fire({
		icon: 'success',
		title: 'Guardado con exito'
	})
}

function Borrado()
{
	// alert('test');
	const Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	})

	Toast.fire({
		icon: 'warning',
		title: 'Borrado con exito'
	})
}
