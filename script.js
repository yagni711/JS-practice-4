var m = [
  'Orange',
  'red',
  {
    name: 'abc',
    lastName: 'test',
    hobbies: {
      fieldGames: [{ game1: 'kabaddi', game2: 'Kho kho' }],
      indoorGames: [
        'test123',
        {
          list1: [
            '123',
            { name: 'test' },
            'table tennis',
            { boardGame: 'Chess', finalGame: 'Bingo' },
            'Ludo',
          ],
        },
      ],
    },
  },
  'purple',
];

function myFavGame(){
  document.getElementById('showh2').innerHTML= 'My Favourite Game is '+'"'+m[2].hobbies.indoorGames[1].list1[3].boardGame +'"';
}
// Alert or show in console.log  'My favourite Game is "Chess";
