
export default class Weather{
    static init(){
        let weather = document.querySelector('.weather');
        
        let weatherdesc = document.querySelector('.weatherDescription');
        if(weather === null){
            return
        }

        const weatherIcons = {
            "Rain": "wi wi-day-rain",
            "Clouds": "wi wi-day-cloudy",
            "Clear": "wi wi-day-sunny",
            "Snow": "wi wi-day-snow",
            "mist": "wi wi-day-fog",
            "Drizzle": "wi wi-day-sleet",
        }

       fetch("http://api.openweathermap.org/data/2.5/weather?q=Bousse,fr&appid=cac0b87bcf827b29226b8a99249ce02a&lang=fr&units=metric")
            .then(function(response){
                let data = response.json();
                
                return data;
            })
            .then(function(data){
                
                weather.textContent = Math.floor(data.main.temp);
               const weatherIcon = data.weather[0].main;
                weatherdesc.textContent = data.weather[0].description;
                document.querySelector('i.wi').className = weatherIcons[weatherIcon];
                chooseImage(data.weather[0].main);

                function chooseImage(main){
                    if (main == "Rain"){
                        return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/rain.jpg')";
                    }
                    else if (main == "Clouds"){
                        return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/cloud.jpg')";
                    }
                    else if(main == "Clear"){
                        return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/sunny.jpg')";
                    }
                    else if(main == "Snow"){
                        return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/snow.jpg')";
                    }
                    else if(main == "mist"){
                        return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/fog.jpg')";
                    }
                    else if(main == "Drizzle"){
                        return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/sleet.jpg')";
                    }
                    else{
                            return document.getElementById("weathers").style.backgroundImage = "url('/images/meteo/weather.jpg')";
                    }
                }
                
                
                
            })

        

    
        

    }

}