@extends('layout')

@section('content')

<section class="hero">
    <div class="container">
        <div class="hero__content">
            <div class="hero__text">
                <h1 class="hero__title heading-primary">
                    LISTEN TO THE INTERVIEW AND RECRUIT
                </h1>
                <p class="hero__descr">Hundreds of pre-interviewed candidates</p>
            </div>
        </div>
    </div>
</section>

<div class="search-box flex text-centered">
    <div class="search-box__search-text">
        <div class="search-box__icon">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <input type="text" class="search-box__input" placeholder="Search talents..." />
    </div>
    <div class="search-box__search-text">
        <div class="search-box__icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <input type="text" class="search-box__input" placeholder="Country" />
    </div>
    <button type="submit" class="search-box__button button button--md">
        Find it now
    </button>
</div>

<section class="links">
    <div class="container">
        <div class="links__content flex">
            <a href="/registerCandidate" class="links__link-item">
                <div class="links__link-icon">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                </div>
                <div class="links__text">
                    <h3 class="links__heading">New Candidates</h3>
                    <p class="links__descr">Register for an interview</p>
                </div>
            </a>

            <a href="/registerEmp" class="links__link-item">
                <div class="links__link-icon">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                </div>
                <div class="links__text">
                    <h3 class="links__heading">Employers</h3>
                    <p class="links__descr">
                        Let us know your specific talent requirements and we will find
                        it for you!
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="jobs">
    <div class="container">
        <h1 class="jobs__title heading-secondary" style="text-align: center">All Candidates Are Willing To Relocate</h1>
        <br>

        <div class="jobs__categories flex wrapped">
            <a href="#" class="jobs__category">
                <h4 class="jobs__category-title">All Jobs</h4>
            </a>
            @foreach($skills as $skill)
                <a href="#" class="jobs__category">
                    <h4 class="jobs__category-title">{{$skill->name}}</h4>
                </a>
            @endforeach
        </div>
        <div class="jobs__latest-jobs">
            <h2 class="jobs__title heading-secondary">Latest Candidates</h2>

            <table class="jobs__table">
                <tbody class="jobs__table-body">
                <tr class="jobs__table-row">
                    <td class="jobs__table-head">Picture</td>
                    <td class="jobs__table-head">Experience</td>
                    <td class="jobs__table-head">Age</td>
                    <td class="jobs__table-head">Location</td>
                    <td class="jobs__table-head">Notice Period</td>
                    <td class="jobs__table-head"></td>
                    <td class="jobs__table-head"></td>
                </tr>
                <tr class="jobs__table-row">
                    <td class="jobs__table-content">
                        <img src="{{ asset('images/avatars/avatar-1.jpg') }}" alt="Candidate Avatar 1" class="jobs__table-avatar" />
                    </td>
                    <td class="jobs__table-content">
                        SAP Finance Professional With 10 Years Of Experience
                    </td>
                    <td class="jobs__table-content">32 Years</td>
                    <td class="jobs__table-content">India, Mumbai</td>
                    <td class="jobs__table-content">Availability In 2 Months</td>
                    <td class="jobs__table-content">
                        <a href="#">Play Interview</a>
                    </td>
                    <td class="jobs__table-content">
                        <a href="#">View resume</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>



@endsection



