
    const canvas2 = document.getElementById('idcanvas2');
    const ctx2 = canvas2.getContext('2d');

    canvas2.width = document.body.offsetWidth;

    const w2 = canvas2.width;
    const h2 = canvas2.height;

    ctx2.fillStyle = '#000';
    ctx2.fillRect(0, 0, w2, h2);

    const cols2 = Math.floor(w2/20)+1;
    const position_y2 = Array(cols2).fill(0);

    function matrix(){
        ctx2.fillStyle = '#0001';
        ctx2.fillRect(0, 0, w2, h2);
        ctx2.fillStyle = '#0f0';
        ctx2.font = '15px monospace';

        position_y2.forEach((y, ind) =>{
            const text1 = String.fromCharCode(Math.random()*128);
            const x2 = ind *20;
            ctx2.fillText(text1, x2 , y);
            if (y>100 + Math.random()*10000){
                position_y2[ind] = 0;
            } else{
                position_y2[ind]= y +20;

            }
        });
    }

    setInterval(matrix, 50);
