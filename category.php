<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Chronicle - Categories</title>
    <link rel="stylesheet" href="assets/css/index/index-style.css">
    <link rel="stylesheet" href="assets/css/index/category-style.css">
    <link rel="stylesheet" href="assets/css/index/header-style.css">
    <link rel="stylesheet" href="assets/css/index/footer-style.css">
</head>
<body>

    <header id="header">
    </header>

    <!-- Category Header -->
    <section class="category-header">
        <div class="container">
            <h1 class="category-title" id="categoryTitle">Politics</h1>
            <p class="category-description" id="categoryDescription">
                Stay informed with the latest political news, in-depth analysis of policies, and coverage of global political events that shape our world.
            </p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section" id="filterSection">
        <div class="container">
            <div class="filter-container">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search in Politics..." id="searchInput">
                    <button class="search-btn">Search</button>
                </div>
                
                <div class="filter-group">
                    <span class="filter-label">Sort By:</span>
                    <select class="filter-select" id="sortSelect">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="popular">Most Popular</option>
                        <option value="trending">Trending</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span class="filter-label">Time:</span>
                    <select class="filter-select" id="timeSelect">
                        <option value="all">All Time</option>
                        <option value="today">Today</option>
                        <option value="week">This Week</option>
                        <option value="month">This Month</option>
                        <option value="year">This Year</option>
                    </select>
                </div>
            </div>
            
            <div class="tag-filters">
                <span class="tag-filter active">All</span>
                <span class="tag-filter">US Politics</span>
                <span class="tag-filter">Global</span>
                <span class="tag-filter">Elections</span>
                <span class="tag-filter">Policy</span>
                <span class="tag-filter">Analysis</span>
                <span class="tag-filter">Opinion</span>
                <span class="tag-filter">Interviews</span>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="articles-section">
        <div class="container">
            <div class="category-stats">
                Showing <span id="articleCount">15</span> articles in <span id="categoryName">Politics</span>
            </div>
            
            <!-- List View (default) -->
            <div class="article-list-view" id="articlesContainer">
                <!-- Article 1 -->
                <div class="article-list-item">
                    <div class="article-list-image">
                        <img src="/api/placeholder/400/300" alt="Article Image">
                    </div>
                    <div class="article-list-content">
                        <span class="article-category">US Politics</span>
                        <h3 class="article-title">Climate Change Legislation Faces Key Vote in Senate</h3>
                        <p class="article-excerpt">Lawmakers prepare for a crucial vote on climate legislation that experts say could reshape environmental policy for decades to come. The bill, which has faced months of debate, addresses carbon emissions, renewable energy subsidies, and regulatory frameworks.</p>
                        <div class="article-list-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                James Wilson
                            </span>
                            <span class="article-date">May 21, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article 2 -->
                <div class="article-list-item">
                    <div class="article-list-image">
                        <img src="/api/placeholder/400/300" alt="Article Image">
                    </div>
                    <div class="article-list-content">
                        <span class="article-category">Global</span>
                        <h3 class="article-title">European Union Announces New Framework for Digital Governance</h3>
                        <p class="article-excerpt">In a landmark decision, EU officials have unveiled comprehensive regulations for technology platforms operating within member states. The framework focuses on data privacy protections, algorithmic transparency, and content moderation standards.</p>
                        <div class="article-list-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Sofia Reyes
                            </span>
                            <span class="article-date">May 20, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article 3 -->
                <div class="article-list-item">
                    <div class="article-list-image">
                        <img src="/api/placeholder/400/300" alt="Article Image">
                    </div>
                    <div class="article-list-content">
                        <span class="article-category">Analysis</span>
                        <h3 class="article-title">How Demographic Shifts Are Reshaping Electoral Maps</h3>
                        <p class="article-excerpt">Political analysts examine the long-term implications of population movements and changing demographics across key regions. Recent census data reveals significant shifts that could alter traditional voting patterns and party strongholds in upcoming elections.</p>
                        <div class="article-list-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Marcus Thompson
                            </span>
                            <span class="article-date">May 19, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article 4 -->
                <div class="article-list-item">
                    <div class="article-list-image">
                        <img src="/api/placeholder/400/300" alt="Article Image">
                    </div>
                    <div class="article-list-content">
                        <span class="article-category">Elections</span>
                        <h3 class="article-title">Local Elections Show Surprising Trends in Voter Turnout</h3>
                        <p class="article-excerpt">Early data from municipal elections across several states reveals unexpected patterns in voter participation. Analysts point to increased engagement among younger voters and historically underrepresented communities as potential drivers of change.</p>
                        <div class="article-list-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Alicia Jackson
                            </span>
                            <span class="article-date">May 18, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article 5 -->
                <div class="article-list-item">
                    <div class="article-list-image">
                        <img src="/api/placeholder/400/300" alt="Article Image">
                    </div>
                    <div class="article-list-content">
                        <span class="article-category">Policy</span>
                        <h3 class="article-title">Healthcare Reform Proposal Gains Bipartisan Support</h3>
                        <p class="article-excerpt">A new healthcare initiative has attracted backing from lawmakers across the political spectrum, marking a rare moment of bipartisan cooperation. The proposal addresses prescription drug pricing, rural healthcare access, and insurance market reforms.</p>
                        <div class="article-list-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Robert Chen
                            </span>
                            <span class="article-date">May 17, 2025</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="pagination">
                <ul class="pagination-list">
                    <li class="pagination-item"><a href="#">&laquo;</a></li>
                    <li class="pagination-item active"><a href="#">1</a></li>
                    <li class="pagination-item"><a href="#">2</a></li>
                    <li class="pagination-item"><a href="#">3</a></li>
                    <li class="pagination-item"><a href="#">4</a></li>
                    <li class="pagination-item"><a href="#">5</a></li>
                    <li class="pagination-item"><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Related Categories -->
    <section class="related-categories">
        <div class="container">
            <h3>Related Categories</h3>
            <div class="categories-list">
                <a href="#" class="category-item">Economics</a>
                <a href="#" class="category-item">World</a>
                <a href="#" class="category-item">Opinion</a>
                <a href="#" class="category-item">Policy</a>
                <a href="#" class="category-item">Law</a>
            </div>
        </div>
    </section>

    <footer id="footer">
    </footer>
    <script src="assets/js/category.js"></script>
</body>
</html>