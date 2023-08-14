import Chart from 'chart.js/auto';

const res = {
    month: [],
    value: []
};
fetch("http://localhost:8000/dashboards")
    .then( response => {
        if(!response.success){
            throw new Error("Network response was not ok")
        }
        return response.json()
    })
    .then( data => {
        res.month = data.month;
        res.value = data.count;
    })
    .catch( error => {
        console.error(error)
    });

const labels = [
    'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Jumlah Pengunjung',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [res.value],
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {}
};

new Chart(
    document.getElementById('myChart'),
    config
);