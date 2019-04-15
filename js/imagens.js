function PreviewImage($element) 
	{
        console.log($element.id);
        var $img = $element.parentElement.querySelector('img');
        var oFReader = new FileReader();
        oFReader.readAsDataURL($element.files[0]);
        oFReader.onload = function (oFREvent) 
		{
            $img.src = oFREvent.target.result;
        };
    }
