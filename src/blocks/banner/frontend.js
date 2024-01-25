
document.addEventListener('DOMContentLoaded', () => {
  const banner = document.querySelector('.wp-block-ept-cookie-banner .content');
  const acceptButton = document.querySelector('#accept-cookies');
  console.log(acceptButton)
  acceptButton.addEventListener('click',event =>{
    event.preventDefault();
    console.log('clock');
    var expires = new Date();
    expires.setMonth(expires.getMonth() + 12);
    document.cookie = 'policy=accept;expires='+expires+';path=/'
    banner.classList.add('hidden');
  })
  const rejectButton = document.querySelector('#reject-cookies');
  rejectButton.addEventListener('click',event =>{
    event.preventDefault();
    
    var expires = new Date();
    expires.setMonth(expires.getMonth() + 12);
    document.cookie = 'policy=reject;expires='+expires+';path=/'
    banner.classList.add('hidden');
  })
})