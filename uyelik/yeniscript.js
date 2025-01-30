
document.addEventListener("DOMContentLoaded", function() {
  const containers = document.querySelectorAll('.urunContainer'); /*Sayfadaki tüm .urunContainer sınıfına sahip öğeleri bulduk ve
                                                                    querySelectorAll ile benzer sınıfa sahip birden fazla öğe seçtik.*/
  
  containers.forEach(container => {
    const tooltip = container.querySelector('.tooltip');

    container.addEventListener('mouseover', () => { 
     
      tooltip.style.visibility = 'visible';
      tooltip.style.opacity = '1';
    });

    container.addEventListener('mouseout', () => {
      
      tooltip.style.visibility = 'hidden';
      tooltip.style.opacity = '0';
    });
  });
});

