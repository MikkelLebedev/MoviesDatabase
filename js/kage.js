export default class Kage{
    constructor() {
    }


    async kageEllerHvad(){
        try {
            const responseKage = await this.skalKimGiveKage(true);
            console.log(responseKage);

            const responseSize =  await this.erDetStorKage('large');
            console.log(responseSize)
        }catch (error) {
            console.log(error);
        }
    }


    skalKimGiveKage(erKimKommetForSent){
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (erKimKommetForSent){
                    resolve('Kim giver kage');
                }else {
                    reject('Ingen kage i dag!');
                }
            }, 2000);
        });
    }

    erDetStorKage(size){
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (size === 'small'){
                    reject('Nej det er en lille kage');
                } else if(size === 'medium'){
                    reject('Aaaarh, ikke rigtig stor')
                } else{
                    resolve('Ja for pokker!')
                }
            }, 2000);
        });
    }
}