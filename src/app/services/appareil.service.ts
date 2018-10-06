export class AppareilService {
  appareils = [
    {
      name : 'Machine à laver',
      status : 'allumé'
    },
    {
      name : 'Frigo',
      status : 'allumé'
    },
    {
      name : 'Ordinnateur',
      status : 'éteint'
    }

  ];

  switchOnAll(){
    for(let appareil of this.appareils){
      appareil.status = 'allumé';
    }

  }

  switchOffAll(){
    for(let appareil of this.appareils){
      appareil.status = 'éteint';
    }

  }
  switchOnOne(i: number){
    this.appareils[i].status='allumé';

  }

  switchOffOne(i: number){
    this.appareils[i].status='éteint';

  }

}
