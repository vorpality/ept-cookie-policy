
document.addEventListener('DOMContentLoaded', () => {
  var autocomplete;
  var lat=0;
  var lng=0;
  const field = document.getElementById('user-address');
  if (field != null) {
    var geocoder;
    var script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDY56cwNRUcmVLV3LpSUUwjPWx4TQJHr3I&libraries=places&callback=initMap';
    script.async = true;
    window.initMap = function() {
      

      autocomplete = new google.maps.places.Autocomplete(field);
      geocoder = new google.maps.Geocoder();
  };


  field.addEventListener( 'change', async event => {
    var lat = document.getElementById('location-lat');
    var lng = document.getElementById('location-lng');
    await geocoder.geocode({ address: field.value }, function (results, status){
      if (status ==='OK' && results.length > 0){
        lat = results[0].geometry.location.lat(),
        lng = results[0].geometry.location.lng()
      };
    })

  })
  document.head.appendChild(script);
}

const banner = document.querySelector('.wp-block-ept-cookie-locationeer .content');
const locationForm = document.querySelector('#location-form');
locationForm.addEventListener('submit', event =>{
  console.log('submit');
  event.preventDefault();
  var expires = new Date();
  expires.setMonth(expires.getMonth() + 12);
  document.cookie = 'location_lat='+lat+';expires='+expires+';path=/'
  document.cookie = 'location_lng='+lng+';expires='+expires+';path=/'
  banner.classList.add('hidden');

})

  
  const acceptButton = document.querySelector('#submit-location');
  acceptButton.addEventListener('click',event =>{
    event.preventDefault();
    var expires = new Date();
    expires.setMonth(expires.getMonth() + 12);
    document.cookie = 'location=set;expires='+expires+';path=/'
    console.log(document.cookie);
    banner.classList.add('hidden');
  })
  const rejectButton = document.querySelector('#skip-location');
  rejectButton.addEventListener('click',event =>{
    event.preventDefault();
    
    var expires = new Date();
    expires.setMonth(expires.getHours() + 1);
    document.cookie = 'location=skip;expires='+expires+';path=/'
    banner.classList.add('hidden');
  })
})

