<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Chronicle - Search Results</title>
    <link rel="stylesheet" href="assets/css/index/search-results-style.css">
    <link rel="stylesheet" href="assets/css/index/header-style.css">
    <link rel="stylesheet" href="assets/css/index/footer-style.css">
</head>
<body>
    
    <header id="header">

    </header>

    <!-- Search Filters Section -->
    <section class="search-filters">
        <div class="container">
            <div class="filters-wrapper">
                <div class="filter-label">Filter by category:</div>
                <div class="categories-list">
                    <a href="#" class="category-item active">All</a>
                    <a href="#" class="category-item">Politics</a>
                    <a href="#" class="category-item">Technology</a>
                    <a href="#" class="category-item">Science</a>
                    <a href="#" class="category-item">Health</a>
                    <a href="#" class="category-item">Business</a>
                    <a href="#" class="category-item">Arts</a>
                    <a href="#" class="category-item">Opinion</a>
                    <a href="#" class="category-item">Sports</a>
                    <a href="#" class="category-item">World</a>
                    <a href="#" class="category-item">Education</a>
                </div>
            </div>
            <div class="search-info">
                <p>Showing results for: <span id="searchTerm" class="search-term">"climate change"</span></p>
                <p class="results-count"><span id="resultsCount">24</span> articles found</p>
            </div>
        </div>
    </section>

    <!-- Search Results Section -->
    <section class="search-results">
        <div class="container">
            <div class="articles-grid">
                <!-- Article 1 -->
                <div class="article-card">
                    <div class="article-image">
                        <img src="/api/placeholder/400/200" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <span class="article-category">Politics</span>
                        <h3 class="article-title">Global Leaders Meet to Address Climate Crisis</h3>
                        <p class="article-excerpt">World leaders gathered at the International Climate Summit to discuss urgent action on rising global temperatures.</p>
                        <div class="article-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Emma Johnson
                            </span>
                            <span class="article-date">May 19, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="article-card">
                    <div class="article-image">
                        <img src="/api/placeholder/400/200" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <span class="article-category">Science</span>
                        <h3 class="article-title">Climate Change Effects on Marine Biodiversity</h3>
                        <p class="article-excerpt">New research indicates accelerating impacts of climate patterns on ocean ecosystems worldwide.</p>
                        <div class="article-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                David Chen
                            </span>
                            <span class="article-date">May 17, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="article-card">
                    <div class="article-image">
                        <img src="/api/placeholder/400/200" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <span class="article-category">Opinion</span>
                        <h3 class="article-title">The Economics of Climate Action: A New Perspective</h3>
                        <p class="article-excerpt">Analysis of cost-effective strategies for addressing climate change while promoting economic growth.</p>
                        <div class="article-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Michael Okonjo
                            </span>
                            <span class="article-date">May 15, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 4 -->
                <div class="article-card">
                    <div class="article-image">
                        <img src="/api/placeholder/400/200" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <span class="article-category">Technology</span>
                        <h3 class="article-title">Innovative Technologies Tackling Climate Change</h3>
                        <p class="article-excerpt">Startups and established tech companies develop breakthrough solutions for carbon capture and renewable energy.</p>
                        <div class="article-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Mark Roberts
                            </span>
                            <span class="article-date">May 18, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 5 -->
                <div class="article-card">
                    <div class="article-image">
                        <img src="/api/placeholder/400/200" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <span class="article-category">Health</span>
                        <h3 class="article-title">Public Health Impacts of Changing Climate Patterns</h3>
                        <p class="article-excerpt">Medical experts warn of increasing health risks associated with climate change and extreme weather events.</p>
                        <div class="article-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Amara Patel
                            </span>
                            <span class="article-date">May 14, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Article 6 -->
                <div class="article-card">
                    <div class="article-image">
                        <img src="/api/placeholder/400/200" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <span class="article-category">World</span>
                        <h3 class="article-title">Island Nations Urge Faster Climate Action</h3>
                        <p class="article-excerpt">Coalition of vulnerable countries calls for increased international support to address rising sea levels.</p>
                        <div class="article-meta">
                            <span class="article-author">
                                <div class="author-avatar"></div>
                                Sophia Wong
                            </span>
                            <span class="article-date">May 16, 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="pagination-item active">1</a>
                <a href="#" class="pagination-item">2</a>
                <a href="#" class="pagination-item">3</a>
                <a href="#" class="pagination-item">4</a>
                <span class="pagination-ellipsis">...</span>
                <a href="#" class="pagination-item">10</a>
                <a href="#" class="pagination-next">Next →</a>
            </div>
        </div>
    </section>

    <!-- Related Searches Section -->
    <section class="related-searches">
        <div class="container">
            <h2 class="section-title">Related Searches</h2>
            <div class="related-searches-list">
                <a href="#" class="related-search-item">climate change solutions</a>
                <a href="#" class="related-search-item">global warming</a>
                <a href="#" class="related-search-item">climate policy</a>
                <a href="#" class="related-search-item">environmental impact</a>
                <a href="#" class="related-search-item">sustainable development</a>
                <a href="#" class="related-search-item">renewable energy</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter" id="subscribeSection">
        <div class="container">
            <h2 class="section-title">Subscribe to Our Newsletter</h2>
            <p>Stay informed with our latest articles and in-depth analysis delivered directly to your inbox.</p>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                <button type="submit" class="newsletter-btn">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
    </footer>

    <script src="assets/js/search-results.js"></script>
</body>
</html>