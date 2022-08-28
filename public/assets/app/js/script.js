const teams = document.getElementById('teams')
const members = [
    {
        name: 'shri vaibhav pawar',
        designation: 'state president',
        twitter: 'https://twitter.com/vaibhavpawarmp?s=11&t=2V2-RxU8FTrDpOGF-5jUOw',
        image: 'images/vaibhav_pawar.jpg'
    },
    {
        name: 'Ganga Pandey ',
        designation: 'state  Vice president',
        twitter: 'https://twitter.com/GangaPandeybjp?t=d9qmjaVynK03zGi2NjBzKw&s=09        ',
        image: 'images/ganga_pandey.jpg'
    },
    {
        name: 'ram patel',
        designation: 'state Vice president',
        twitter: 'https://twitter.com/rampatelbjp?t=d9qmjaVynK03zGi2NjBzKw&s=09        ',
        image: 'images/ram_patel.jpg'
    },
    {
        name: 'vivek chouhan',
        designation: 'state Vice president',
        twitter: 'https://twitter.com/vivekbjymmp?t=d9qmjaVynK03zGi2NjBzKw&s=09        ',
        image: 'images/vivek.jpg'
    },

]


members.map(member => {
    teams.innerHTML +=`
    <div class="col-sm-6 m-auto p-4">
    <div class="card_custom">
      <div class="flip-card">
        <div class="flip-card__container">
          <div class="card-front">
            <div class="card-front__tp card-front__tp--city">
              <h2 class="card-front__heading text-capitalize">${member.name}</h2>
              <p class="text-capitalize">${member.designation}</p>
            </div>

            <div class="card-front__bt">
              <p class="card-front__text-view card-front__text-view--city" style="font-size: 16px">
                View
              </p>
            </div>
          </div>
          <div class="card-back">
            <img src="${member.image}" height="" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="inside-page">
        <div class="inside-page__container">
          <h3 class="inside-page__heading inside-page__heading--city">
            Shri Vaibhav Pawar
          </h3>
          <p class="inside-page__text">
          <a href="${member.twitter}" class="btn btn-secondary rounded-circle"> <i class="fa fa-twitter " aria-hidden="true"></i>
          </a>
            <a href="#" class="btn btn-secondary rounded-circle"> <i class="fa fa-facebook " aria-hidden="true"></i>
            </a>
            <a href="#" class="btn btn-secondary rounded-circle"> <i class="fa fa-instagram "
                aria-hidden="true"></i> </a>
           

          </p>
          <!-- <a href="#" class="inside-page__btn inside-page__btn--city">View deals</a> -->
        </div>
      </div>
    </div>
  </div>
    `
})
