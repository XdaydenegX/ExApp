function ChangeCategory(id) {
    var newsContainer = document.querySelector('.news');
    var categoryNewsTag = document.querySelector('#news-category');
    $.ajax({
        type: "get",
        url: `/api/news/get_news_by_category?category-id=${id}`,
        success: function (response) {
            newsContainer.innerHTML = '';
            console.log(response.data);
            response.data.forEach(n => {
                newsContainer.insertAdjacentHTML('beforeend', `
                <div class="news-container" id='news-${n.id}'>
                    <h1 onclick="window.location = 'news_detail/${n.id}'">${n.title}</h1>
                    <span>${n.date}</span>
                    <br>
                    <h3>
                    </h3>
                </div>
                `)
            
            n.category.forEach(c => {
                document.querySelector(`#news-${n.id} h3`).insertAdjacentHTML('beforeend', `
                ${c.title}
                `)
            })
            });
        }
    });
}
// var arr = [{id: 2, pock: 16}, {id: 3, pock: 4}];
// for(let i = 0; i < arr.length; i++) {
//     console.log(arr[i]);   
// }